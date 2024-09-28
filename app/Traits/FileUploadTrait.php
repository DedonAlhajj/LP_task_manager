<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait FileUploadTrait
{

    public function uploadFile($file)
    {
        // التحقق من نوع الملف
        $fileType = $file->getClientOriginalExtension();

        // حفظ الملف في المسار المناسب
        $path = $file->store('uploads/' . $fileType ,'public');

        return $path;
    }

    public function UploadFile1(Request $request,$FieldName,$folderName){
        $name = $request->file($FieldName)->getClientOriginalName();
        $path = $request->file($FieldName)->store($folderName,"imgFile");
        return $path;
    }

    public function ReplaceImg($objectModel,$request,$FieldName,$folderName){
        $new_image = '';
        $old_image = $objectModel;
        if($old_image){
            unlink(public_path('img/'.$old_image));
        }
        if ($request->hasFile($FieldName)){
            $new_image = $this->UploadFile($request,$FieldName,$folderName);
        }
        return $new_image;
    }
}
