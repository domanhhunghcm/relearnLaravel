<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userHome extends Controller
{
    public function index()
    {
        $name="do manh hung";
        $userArray=[
            "name"=>"manhhung",
            "yearsOld"=>"19",
            "sex"=>"male"
        ];
        return view("userHome",compact("name","userArray"));
    }
}
