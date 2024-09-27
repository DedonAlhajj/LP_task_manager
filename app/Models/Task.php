<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=['name','project_id',
    'description','end_date','start_date','status'];

    public function project()
    {
        return $this->belongsTo(Project::class , 'project_id');
    }
    public function attach_comments()
    {
        return $this->morphMany(Comment_Attach::class, 'comm_attach_able');
    }

    public function users(){
        return $this->belongsToMany(User::class , 'task_users');
    }

    public function checklists()
    {
        return $this->hasMany(Checklist::class, 'task_id');
    }
}
