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
    public function viewPost()
    {
        $posts=Posts::all();
        return view("viewPost",compact("posts"));
    }
    public function viewDetail(Request $request)
    {
        $posts=Posts::where("id",$request->id)->first();
        return view("viewDetail",compact("posts"));
    }
    public function viewDelete(Request $request)
    {
        $posts=Posts::where("id",$request->id)->delete();
        return back()->with("post_delete","delete success");
    }
    public function viewEdit(Request $request)
    {
        $posts=Posts::where("id",$request->id)->first();
        return view("editPost",compact("posts"));
    }
    public function editSave(Request $request)
    {
        $posts=Posts::find($request->id);
        $posts->title=$request->title;
        $posts->body=$request->body;
        $posts->save();
        return redirect()->route('postController.viewPost')->with("post_delete","edit success");
    }
}
