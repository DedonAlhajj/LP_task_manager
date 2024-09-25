<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable=['name','project_id','task_type',
    'description','end_time','status','user_id'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
    public function attach_comments(): MorphMany
    {
        return $this->morphMany(Comment_Attach::class, 'comment_attachable');
    }
  

    public function users() {
        return $this->belongsToMany(User::class, 'task_user');
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function priority() {
        return $this->belongsTo(Priority::class);
    }

    public function creator() 
    {
        return $this->belongsTo(User::class, 'created_by');
    }


}
