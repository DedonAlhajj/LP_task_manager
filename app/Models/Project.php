<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=['name','details','created_by','start_date','end_date','status'];


    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'project_users')->withPivot('status')->withTimestamps();;
    }

    public function attach_comments()
    {
        return $this->morphMany(Comment_Attach::class, 'comm_attach_able');
    }

    private function updateProjectStatus($projectId)
    {
        $project = Project::findOrFail($projectId);
        $tasks = $project->tasks;

        // حالة المهام
        $allCompleted = $tasks->every(function ($task) {
            return $task->status == 'Completed';
        });

        $anyInProgress = $tasks->contains(function ($task) {
            return $task->status == 'InProgress';
        });

        if ($allCompleted) {
            $project->status = 'Completed';
        } elseif ($anyInProgress) {
            $project->status = 'InProgress';
        } else {
            $project->status = 'New';
        }

        $project->save();
    }

}
