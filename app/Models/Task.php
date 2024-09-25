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
        return $this->morphMany(Comment_Attach::class, 'comment_attachable');
    }


    public function users(){
        return $this->belongsToMany(User::class);
    }
}
