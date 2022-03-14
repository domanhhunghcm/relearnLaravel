<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function viewBook()
    {
        $books=book::orderBy("id","DESC")->get();
        return view("viewBook",compact("books"));
    }
    public function saveBook(Request $request)
    {
        $new=new book();
        $new->firstName=$request->firstName;
        $new->lastName=$request->lastName;
        $new->email=$request->email;
        $new->phone=$request->phone;
        $new->save();
        return response()->json($new);
    }
}
