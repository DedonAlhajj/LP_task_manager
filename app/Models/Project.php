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

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'project_users');
    }

    public function attach_comments(): MorphMany
    {
        return $this->morphMany(Comment_Attach::class, 'comment_attachable');
    }

}
