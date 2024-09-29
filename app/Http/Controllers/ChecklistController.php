<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Notifications\TaskCompletedNotification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ChecklistController extends Controller
{
    protected Project $project;


    public function __construct(Project $project)
    {
        $this->project = $project;
    }
    public function index($taskId)
    {
        $task = Task::findOrFail($taskId);
        $checklists = $task->checklists;

        return view('checklists.index', compact('task', 'checklists'));
    }

    public function create($taskId)
    {
        $task = Task::findOrFail($taskId);
        $project = $task->project;

        // التحقق من أن المستخدم لديه الصلاحية (صاحب المشروع أو مستخدم approved)
        $user = auth()->user();
        $isAssigned = $project->users()
            ->wherePivot('status', 'approved')
            ->where('user_id', $user->id)
            ->exists();

        // السماح بالتعديل فقط لصاحب المشروع أو المرتبطين approved
        if ($project->created_by == $user->id || $isAssigned) {
            return view('chicklists.create', compact('task'));
        } else {
            return redirect()->route('404');
        }




    }

    public function store(Request $request, $taskId)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        try {
            DB::transaction(function () use ($request,$taskId) {
                $task = Task::findOrFail($taskId);
                $checklist = $task->checklists()->create([
                    'title' => $request->title,
                ]);

                // تحديث حالة المهمة
                $this->updateTaskStatus($task);
                $checklist->task->project->updateProjectStatus();
            });

            DB::commit();
            return redirect()->route('tasks.show', $taskId)->with('success', 'Checklist created');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('tasks.show', $taskId)->with('error', 'Failed created Checklist ');
        }

    }

    public function show($task ,$checklist)
    {
        // جلب المهمة بناءً على الـ id
        $check = Checklist::findOrFail($checklist);
        $user = auth()->user();

        if ($check->task->project_id == $user->id) {
            return view('chicklists.index', compact('check','task'));
        } else {
            return abort(404);
        }
    }
    public function edit($task ,$checklist)
    {
        $task = Task::findOrFail($task);
        $checklist = Checklist::findOrFail($checklist);

        return view('chicklists.edit', compact('task', 'checklist'));
    }

    public function update(Request $request, $task ,$checklist)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        try {
            DB::transaction(function () use ($request, $task ,$checklist) {
                $checklist = Checklist::findOrFail($checklist);
                $checklist->update($request->all());

                // تحديث حالة المهمة
                $this->updateTaskStatus($task);
                // تحديث حالة المشروع
                $checklist->task->project->updateProjectStatus();
            });

            DB::commit();
            return redirect()->route('tasks.show', $task)->with('success', 'Checklist updated');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('tasks.show', $task)->with('error', 'Failed updated Checklist ');
        }


    }

    public function destroy($task ,$checklist)
    {
        $checklist = Checklist::findOrFail($checklist);
        try {
            DB::transaction(function () use ($checklist,$task) {
                $task = Task::findOrFail($task);
                $checklist->delete();
                $this->updateTaskStatus($task);
                $checklist->task->project->updateProjectStatus();
            });

            DB::commit();
            return redirect()->route('tasks.show', $task)->with('success', 'Checklist deleted');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('tasks.show', $task)->with('error', 'Failed delete Checklist ');
        }

    }

    private function updateTaskStatus($task)
    {
        $checklists = $task->checklists;

        // حالة الـ Checklists
        $allCompleted = $checklists->every(function ($checklist) {
            return $checklist->status == 1; // 1 تعني Completed
        });

        $anyInProgress = $checklists->contains(function ($checklist) {
            return $checklist->status == 1; // 1 تعني InProgress
        });

        if ($allCompleted) {
            $task->status = 'Completed';

            // send notification to all users that work on task when task completed
            /*foreach ($task->users as $userId) {
                $user = User::find($userId);
                $user->notify(new TaskCompletedNotification($task));
            }*/
        } elseif ($anyInProgress) {
            $task->status = 'InProgress';
        } else {
            $task->status = 'New';
        }

        $task->save();

    }

}

