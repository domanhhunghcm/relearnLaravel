<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post as Posts;

class postController extends Controller
{
    public function viewAdd()
    {
        return view("postViewAdd");
    }
    public function saveAdd(Request $request)
    {
        $posts= new Posts();
        $posts->title=$request->title;
        $posts->body=$request->body;
        $posts->save();
        return back()->with("postSaved","post created successfully");
    }
}
