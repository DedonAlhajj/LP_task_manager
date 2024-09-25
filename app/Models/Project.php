<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=['name','details','end_time','category','status','client_id'];
   
   
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
    public function attach_comments(): MorphMany
    {
        return $this->morphMany(Comment_Attach::class, 'comment_attachable');
    }

}
