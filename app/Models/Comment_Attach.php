<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Attach extends Model
{
    use HasFactory;
    protected $fillable=['details','url','user_id',
    'comm_attach_able_id','comm_attach_able_type'];


    public function comment_attachable(): MorphTo
    {
        return $this->morphTo();
    }

}
