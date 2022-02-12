<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class fileUpload extends Controller
{
    public function viewUpload()
    {
        return view("upFile");
    }
    public function procUpFile(Request $request)
    {
        //$path=$request->uploadFile->store('public');
        $path=Storage::putFile('public', $request->uploadFile);
        return back()->with("upFile",$path);
    }
}
