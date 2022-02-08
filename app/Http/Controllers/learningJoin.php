<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class learningJoin extends Controller
{
    public function innerJoin(Type $var = null)
    {
        $request=DB::table("postdata")
        ->join("user","user.id","=","postdata.user_id")->select("postdata.id","postdata.title","postdata.body","user.name","user.phone","user.email")
        ->get();
        return $request;
    }
    public function leftJoin(Type $var = null)
    {
        $request=DB::table("postdata")
        ->leftjoin("user","user.id","=","postdata.user_id")->select("*")
        ->get();
        return $request;
    }
    public function rightJoin(Type $var = null)
    {
        $request=DB::table("postdata")
        ->rightjoin("user","user.id","=","postdata.user_id")->select("*")
        ->get();
        return $request;
    }
}
