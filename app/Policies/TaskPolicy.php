<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use App\Models\Task;

class TaskPolicy
{
    /**
     * تحديد الصلاحية للتعديل على المهام.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Task  $task
     * @return bool
     */
    public function edit(User $user, Task $task)
    {
        // جلب المشروع المرتبط بالمهمة
        $project = $task->project;

        // التحقق من أن المستخدم هو صاحب المشروع وله دور Manager
        return $user->hasRole('Manager') && $project->created_by == $user->id;
    }

    public function delete(User $user, Task $task)
    {
        // جلب المشروع المرتبط بالمهمة
        $project = $task->project;

        // التحقق من أن المستخدم هو صاحب المشروع وله دور Manager
        return $user->hasRole('Manager') && $project->created_by == $user->id;
    }

    public function create(User $user, Project $project)
    {

        return $project->created_by == $user->id || $project->users()
                ->wherePivot('status', 'approved')
                ->where('user_id', $user->id)
                ->exists();
    }

    public function view(User $user, Task $task)
    {
        $project = $task->project;
        return $project->created_by == $user->id || $project->users()
                ->wherePivot('status', 'approved')
                ->where('user_id', $user->id)
                ->exists();
    }
}
