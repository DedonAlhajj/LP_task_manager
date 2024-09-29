<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=['name','details','created_by','start_date','end_date','status'];

    protected $ll = "fdvd" ;
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

    public function updateProjectStatus()
    {
        $tasks = $this->tasks;

        // تحقق من حالات المهام
        $allCompleted = $tasks->every(fn($task) => $task->status === 'Completed');
        $anyInProgress = $tasks->contains(fn($task) => $task->status === 'InProgress');

        if ($allCompleted) {
            $this->status = 'Completed';
        } elseif ($anyInProgress) {
            $this->status = 'InProgress';
        } else {
            $this->status = 'New';
        }

        $this->save();
    }

}
