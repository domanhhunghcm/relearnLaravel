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
    public function scaleImg(Request $request)
    {
        $image_resize=Image::make($request->file('uploadFile')->getRealPath());
        $image_resize->resize(450,450);
        $image_resize->save(public_path("dohungs/".$request->uploadFile->getClientOriginalName()));
        return "view add success";
    }
}
