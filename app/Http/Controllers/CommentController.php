<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Comment_Attach;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    use FileUploadTrait;

    public function store(Request $request)
    {

        // التحقق من صحة البيانات
        $request->validate([
            'body' => 'nullable|string|max:1000',
            'file' => 'nullable|file|max:2048', // تحديد نوع وحجم الملف
            'comm_attach_able_id' => 'required|integer',
            'comm_attach_able_type' => 'required|string',
        ]);

        // إعداد البيانات للتعليق
        $data = [
            'user_id' => Auth::id(),
            'comm_attach_able_id' => $request->comm_attach_able_id,
            'comm_attach_able_type' => $request->comm_attach_able_type,
        ];

        // التحقق مما إذا كان هناك ملف مرفق
        if ($request->hasFile('file')) {
            $data['message_type'] = 'text';
            $data['file_path'] =  $this->uploadFile($request->file) ?? null;
            $data['body'] = $request->body ?? null; // content يصبح null
        } 
        // إنشاء التعليق
        Comment_Attach::create($data);
        return redirect()->back()->with('success', 'Comment Add successfully');
    }

    public function comments()
    {
        return $this->morphMany(Comment_Attach::class, 'comm_attach_able');
    }
}

