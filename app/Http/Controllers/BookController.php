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
    public function getChange($id)
    {
        $book=book::find($id);
        return $book; 
    }
    public function saveChange(Request $request)
    {
        $book=book::find($request->id);
        $book->firstName=$request->firstName;
        $book->lastName=$request->lastName;
        $book->email=$request->email;
        $book->phone=$request->phone;
        $book->update();
        return response()->json($book); 
    }
    public function deleteBook($id)
    {
        $book=book::find($id);
        $book->delete();
        return response()->json(["deleteSuccess"=>"Delete successly"]); 
    }
    public function deleteAll(Request $request)
    {
        $mang=$request->del;
        for ($i=0; $i < count($mang) ; $i++) { 
            book::find($mang[$i])->delete();
        }
        return response()->json(["deleteSuccessAll"=>"All delete successly"]); 
    }
}
