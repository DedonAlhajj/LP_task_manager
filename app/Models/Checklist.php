<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    use HasFactory;

    protected $fillable=['title','task_id','status'];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    public function attach_comments()
    {
        return $this->morphMany(Comment_Attach::class, 'comm_attach_able');
    }
}
