<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class resizeControll extends Controller
{
    public function displayViewScale()
    {
        return view("resizeImage");
    }
    public function displayDropZone()
    {
        return view("dropZone");
    }
    public function scaleImg(Request $request)
    {
        $image_resize=Image::make($request->file('uploadFile')->getRealPath());
        $image_resize->resize(450,450);
        $image_resize->save(public_path("dohungs/".$request->uploadFile->getClientOriginalName()));
        return "view add success";
    }
    public function saveDrop(Request $request)
    {
        echo "123";
        echo $image=$request->file('file')->getRealPath();
        $file=$request->file('file');
        $file->move(base_path('dohungs/'), $file->getClientOriginalName());
        //$image->move(public_path("dohungs/".$request->file('file')->getClientOriginalName()));
    }
}
