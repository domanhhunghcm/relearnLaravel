<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\phones;
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
    public function addUserPhone()
    {
        $user=new User();
        $user->name="hungdo1";
        $user->email="dohung@fds.com4".encrypt("secret");
        $user->password=encrypt("secret");
        $user->save();
        $phone=new phones();
        $phone->phone="090855562qweqwe8";
        $user->phone()->save($phone);
        return "requested hung do";
    }
    public function fetchPhone(Request $request)
    {
       
        $phone=User::find($request->id)->phone;
        return $phone;
    }
}
