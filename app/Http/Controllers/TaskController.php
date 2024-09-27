<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Notifications\TaskAssignedNotification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function index()
    {
        //
    }


    public function create($projectId)
    {
        $project = Project::findOrFail($projectId);
        $user = auth()->user();
        $users = $project->users()->wherePivot('status', 'approved')->get();
        $isCreator = $project->created_by == $user->id;
        $isAssigned = $project->users()
            ->where('user_id', $user->id)
            ->wherePivot('status', 'approved')
            ->exists();

        if ($isCreator || $isAssigned) {
            return view('tasks.create', compact('project','users'));
        } else {
            return redirect()->route('404');
        }
    }
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'project_id' => 'required|exists:projects,id', // التحقق من وجود الـ project_id
            'users' => 'required|array', // التحقق من أن المستخدمين عبارة عن مصفوفة
            'users.*' => 'exists:users,id', // التحقق من أن كل مستخدم موجود في جدول المستخدمين
        ]);
        try {
            DB::transaction(function () use ($request) {
                // إنشاء المهمة
                $task = Task::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'project_id' => $request->project_id,
                ]);

                // إرفاق المستخدمين للمهمة
                $task->users()->attach($request->users);

                // إرسال إشعار لكل مستخدم تم تعيينه للمهمة (إذا كنت ترغب في ذلك)
                foreach ($request->users as $userId) {
                    $user = User::find($userId);
                    $user->notify(new TaskAssignedNotification($task)); // إشعار تعيين المهمة
                }
            });

            DB::commit();
            return response()->json(['success' => 'Task created successfully']);
            // return redirect()->route('projects.show', $request->project_id)->with('success', 'Task created successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            return response()->json('error', 'Failed to create task');
        }

    }



    public function show($id)
    {
        // جلب المهمة بناءً على الـ id
        $task = Task::findOrFail($id);

        // جلب المشروع المرتبط بالمهمة
        $project = $task->project;

        // التحقق من أن المستخدم الحالي مرتبط بالمشروع وحالته approved
        $user = auth()->user();
        $isAssigned = $project->users()
            ->wherePivot('status', 'approved')
            ->where('user_id', $user->id)
            ->exists();
        if ($project->created_by == $user->id || $isAssigned) {
            return view('tasks.show', compact('task'));
        } else {
            return redirect()->route('404');
        }
    }



    public function edit($id)
    {
        // جلب المهمة بناءً على الـ id
        $task = Task::findOrFail($id);

        // جلب المشروع المرتبط بالمهمة
        $project = $task->project;

        // التحقق من أن المستخدم لديه الصلاحية (صاحب المشروع أو مستخدم approved)
        $user = auth()->user();
        $isAssigned = $project->users()
            ->wherePivot('status', 'approved')
            ->where('user_id', $user->id)
            ->exists();

        // السماح بالتعديل فقط لصاحب المشروع أو المرتبطين approved
        if ($project->created_by == $user->id || $isAssigned) {
            return view('tasks.edit', compact('task'));
        } else {
            return redirect()->route('404');
        }
    }



    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'users' => 'required|array', // التأكد من أن المستخدمين عبارة عن مصفوفة
            'users.*' => 'exists:users,id', // التحقق من وجود المستخدمين في قاعدة البيانات
        ]);

        $task = Task::findOrFail($id);
        $project = $task->project;

        // التحقق من الصلاحية
        $user = auth()->user();
        $isAssigned = $project->users()->wherePivot('status', 'approved')->where('user_id', $user->id)->exists();

        // السماح بالتحديث فقط لصاحب المشروع أو المرتبطين approved
        if ($project->created_by == $user->id || $isAssigned) {

            try {
                DB::transaction(function () use ($request, $task) {


                    // جلب المستخدمين الحاليين المرتبطين بالمهمة
                    $existingUsers = $task->users()->pluck('user_id')->toArray();

                    // تحديث بيانات المهمة
                    $task->update([
                        'name' => $request->name,
                        'description' => $request->description,
                        'start_date' => $request->start_date,
                        'end_date' => $request->end_date,
                    ]);

                    // تحديث المستخدمين المرتبطين بالمهمة
                    $task->users()->sync($request->users);

                    // جلب المستخدمين الجدد بعد التحديث
                    $newUsers = array_diff($request->users, $existingUsers);

                    // إرسال إشعار للمستخدمين الجدد فقط
                    foreach ($newUsers as $userId) {
                        $user = User::find($userId);
                        $user->notify(new TaskAssignedNotification($task)); // إشعار تعيين المهمة
                    }
                });

                DB::commit();
                return response()->json(['success' => 'Task updated successfully']);
                // return redirect()->route('tasks.show', $task->id)->with('success', 'Task updated successfully ');
            } catch (\Exception $ex) {
                DB::rollback();
                return response()->json(['error' => 'Failed update task']);

                // return redirect()->route('tasks.show', $task->id)->with('error', 'Failed update task');
            }


        } else {
            return abort(404);
        }
    }



    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $project = $task->project;
        $user = auth()->user();

        if ($project->created_by == $user->id) {
            try {
                DB::transaction(function () use ($task,$project) {
                    // فصل المستخدمين المرتبطين بالمهمة
                    $task->users()->detach();

                    // حذف المهمة
                    $task->delete();
                });
                DB::commit();
                return redirect()->route('projects.show', $project->id)->with('success', 'Task deleted');
            } catch (\Exception $ex) {
                DB::rollback();
                return redirect()->route('projects.show', $project->id)->with('error', 'Failed deleted task');
            }

        } else {
            return redirect()->route('404');
        }
    }



}
