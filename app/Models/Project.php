<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=['name','details','start_date','end_date','status'];
   
   
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
    
    public function attach_comments(): MorphMany
    {
        return $this->morphMany(Comment_Attach::class, 'comment_attachable');
    }

}
