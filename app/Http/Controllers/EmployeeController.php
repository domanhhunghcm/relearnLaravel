<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\importEmployee;

class EmployeeController extends Controller
{
    public function displayViewImport()
    {
        return view("importEmployee");
    }
    public function proccessUpload(Request $request)
    {
        $path1 = $request->file('employeeFile')->store('temp'); 
        $path=storage_path('app').'/'.$path1;  
        $data = \Excel::import(new importEmployee,$path);

        // Excel::import(new importEmployee,$request->file);
        return "procees data roi";
    }
}
