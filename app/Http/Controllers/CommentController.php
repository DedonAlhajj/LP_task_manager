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
            $data['file_path'] = $this->uploadFile($request->file);
            $data['body'] = null; // content يصبح null
            $data['message_type'] = $request->file->getClientOriginalExtension();
        } else {
            $data['body'] = $request->body; // حفظ المحتوى
            $data['file_path'] = null; // file_path يصبح null
            $data['message_type'] = 'text';
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

