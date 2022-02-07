<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postControl extends Controller
{
    public function displayItem() {
        $posts=DB::table("postdata")->get();
        return view("postAll",compact("posts"));
    }
    public function viewAddItem() {
        return view("addPost");
    }
    public function addPost(Request $request) {
        DB::table("postdata")->insert([
            "title"=>$request->title,
            "body"=>$request->body
        ]);
        return back()->with("post_created","Post add data success");
    }
    public function deletePost($id) {
        DB::table("postdata")->where('id', $id)->delete();
        return back()->with("post_delete","Post delete data success");
    }
    public function updatePostView($id)
    {
        $post=DB::table("postdata")->where('id', $id)->first();
        return view("postDetail",compact("post"));
    }
    public function proccessUpdate(Request $request)
    {
        $post=DB::table("postdata")->where('id', $request->id)->update(
            [
                "title"=>$request->title,
                "body"=>$request->body
            ]);
        return back()->with("post_update","Post UPDATE data success");
    }
}
