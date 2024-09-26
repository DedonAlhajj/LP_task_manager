<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
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

        $isCreator = $project->created_by == $user->id;
        $isAssigned = $project->users()
            ->where('user_id', $user->id)
            ->wherePivot('status', 'approved')
            ->exists();

        if ($isCreator || $isAssigned) {
            return view('tasks.create', compact('project'));
        } else {
            return redirect()->route('404');
        }

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'project_id' => 'required|exists:projects,id', // التحقق من وجود الـ project_id
        ]);

        try {
            DB::transaction(function () use ($request) {
                Task::create($request->all());
            });

            DB::commit();
            return redirect()->route('projects.show', $request->project_id)->with('success', 'Task created successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('projects.show', $request->project_id)->with('error', 'Failed to create task');
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
                    $task->update($request->all());
                });

                DB::commit();
                return redirect()->route('tasks.show', $task->id)->with('success', 'Task updated successfully ');
            } catch (\Exception $ex) {
                DB::rollback();
                return redirect()->route('tasks.show', $task->id)->with('error', 'Failed update task');
            }


        } else {
            return redirect()->route('404');
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
                    $task->delete();
                });

                DB::commit();
                return redirect()->route('projects.show', $project->id)->with('success', 'Task deleted');
            } catch (\Exception $ex) {
                DB::rollback();
                return redirect()->route('projects.show', $project->id)->with('success', 'Failed deleted task');
            }

        } else {
            return redirect()->route('404');
        }
    }

}
