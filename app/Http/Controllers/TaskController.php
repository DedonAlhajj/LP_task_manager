<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Notifications\TaskAssignedNotification;
use App\Notifications\TaskUpdatedNotification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $user = auth()->user();
        $tasks=$user->tasks()->get();
        return view('tasks.my-task', compact('tasks'));
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
            return abort(404);
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
                // foreach ($request->users as $userId) {
                //     $user = User::find($userId);
                //     $user->notify(new TaskAssignedNotification($task)); // إشعار تعيين المهمة
                // }
            });

            DB::commit();
            return response()->json(['success' => 'Task created successfully']);
            // return redirect()->route('projects.show', $request->project_id)->with('success', 'Task created successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            return response()->json(['error'=>$ex->getMessage()]);
        }

    }



    public function show($id)
    {
        $task = Task::findOrFail($id);
        $this->authorize('view', $task);

        return view('tasks.show', compact('task'));
    }



    public function edit($id)
    {
        $task = Task::findOrFail($id);

        // التحقق من الصلاحية باستخدام الـ Policy
        $this->authorize('edit', $task);

        // جلب المشروع المرتبط بالمهمة
        $project = $task->project;
        $users = $project->users()->wherePivot('status', 'approved')->get();

        return view('tasks.edit', compact('task', 'users'));
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

        // السماح بالتحديث فقط لصاحب المشروع
        $this->authorize('edit', $task);


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
                        'status'=>$request->status,
                    ]);

                    // تحديث المستخدمين المرتبطين بالمهمة
                    $task->users()->sync($request->users);

                    // جلب المستخدمين الجدد بعد التحديث
                    $newUsers = array_diff($request->users, $existingUsers);

                    // إرسال إشعار للمستخدمين الجدد فقط
                    // foreach ($newUsers as $userId) {
                    //     $user = User::find($userId);
                    //     $user->notify(new TaskAssignedNotification($task)); // إشعار تعيين المهمة
                    // }

                    // $oldUsers = array_intersect($existingUsers, $request->users);
                    // foreach ($oldUsers as $userId) {
                    //     $user = User::find($userId);
                    //     $user->notify(new TaskUpdatedNotification($task)); // إشعار تحديث المهمة
                    // }
                });

                DB::commit();
                return response()->json(['success' => 'Task updated successfully']);
            } catch (\Exception $ex) {
                DB::rollback();
                return response()->json(['error' => 'Failed update task']);

            }



    }



    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $project = $task->project;

        $this->authorize('delete', $task);
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

    }



}
