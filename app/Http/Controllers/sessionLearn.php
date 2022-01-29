<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionLearn extends Controller
{
    public function sessionCheck(Request $request)
    {
        if ($request->session()->has('doHungUser')) {
            echo $request->session()->get('doHungUser');
        }else{
            echo "no session";
        }
    }
    public function sessionSet(Request $request)
    {
        $request->session()->put('doHungUser', 'dohung0221');
    }
    public function sessionRemove(Request $request)
    {
        $request->session()->pull('doHungUser', 'default');
    }
}
