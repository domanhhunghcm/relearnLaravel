<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use Illuminate\Support\Facades\File; 

class companies extends Controller
{
    public function addStudentView()
    {
        return view("addCompany");
    }
    public function addStore(Request $request)
    {
        $imageStore=$request->file("companyImage");
        $setNameImage=time().".".$imageStore->getClientOriginalExtension();
        $imageStore->move(base_path('\public\storage'),$setNameImage);
        $newCom=new company();
        $newCom->name=$request->companyName;
        $newCom->imageData=$setNameImage;
        $newCom->save();
        return back()->with("add_success","Add success");
    }
    public function displayAll()
    {
        $companies=company::all();
        return view("listCompany",compact("companies"));
    }
    public function viewEdit($id)
    {
        $getComp=company::find($id);
        return view("editComp",compact("getComp"));
    }
    public function editStore(Request $request)
    {
        $imageStore=$request->file("companyImage");
        $setNameImage=time().".".$imageStore->getClientOriginalExtension();
        $imageStore->move(base_path('\public\storage'),$setNameImage);
        $newCom=company::find($request->compId);
        $newCom->name=$request->companyName;
        $newCom->imageData=$setNameImage;
        $newCom->save();
        return back()->with("edit_success","Edit success");
    }
    public function deleteComp($id)
    {
        $newCom=company::find($id);
        $hungDo=base_path('public\storage\\').$newCom->imgData;
        File::delete($hungDo);
        $newCom->delete();
        return back()->with("delete_success","Delete success");
    }
}
