<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment_Attach extends Model
{
    use HasFactory;
    protected $fillable=['body','file_path','message_type','user_id',
    'comm_attach_able_id','comm_attach_able_type'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // العلاقة مع الكائن المرتبط
    public function commAttachAble(): MorphTo
    {
        return $this->morphTo();
    }

}
