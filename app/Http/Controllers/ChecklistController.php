<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ChecklistController extends Controller
{
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
            return view('checklists.create', compact('task'));
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
                $task->checklists()->create([
                    'title' => $request->title,
                ]);

                // تحديث حالة المهمة
                $this->updateTaskStatus($taskId);

                // تحديث حالة المشروع
                $task->project->updateProjectStatus();
            });

            DB::commit();
            return redirect()->route('checklists.index', $taskId)->with('success', 'تم إضافة Checklist بنجاح');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('checklists.index', $taskId)->with('error', 'فشل إضافة Checklist ');
        }

    }

    public function edit($taskId, $checklistId)
    {
        $task = Task::findOrFail($taskId);
        $checklist = Checklist::findOrFail($checklistId);

        return view('checklists.edit', compact('task', 'checklist'));
    }

    public function update(Request $request, $taskId, $checklistId)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        try {
            DB::transaction(function () use ($request, $checklistId,$taskId) {
                $checklist = Checklist::findOrFail($checklistId);
                $checklist->update($request->all());

                // تحديث حالة المهمة
                $this->updateTaskStatus($taskId);
                // تحديث حالة المشروع
                $checklist->task->project->updateProjectStatus();
            });

            DB::commit();
            return redirect()->route('checklists.index', $taskId)->with('success', 'تم تحديث الـ Checklist بنجاح');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('checklists.index', $taskId)->with('error', 'فشل تحديث الـ Checklist ');
        }


    }

    public function destroy($taskId, $checklistId)
    {
        $checklist = Checklist::findOrFail($checklistId);
        try {
            DB::transaction(function () use ($checklist,$taskId) {
                $checklist->delete();
                $this->updateTaskStatus($taskId);
                $checklist->task->project->updateProjectStatus();
            });

            DB::commit();
            return redirect()->route('checklists.index', $taskId)->with('success', 'تم حذف الـ Checklist بنجاح');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('checklists.index', $taskId)->with('error', 'قشل حذف الـ Checklist ');
        }

    }

    private function updateTaskStatus($taskId)
    {
        $task = Task::findOrFail($taskId);
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
        } elseif ($anyInProgress) {
            $task->status = 'InProgress';
        } else {
            $task->status = 'New';
        }

        $task->save();
    }

}

