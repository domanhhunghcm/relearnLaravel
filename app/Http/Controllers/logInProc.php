<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logInProc extends Controller
{
    public function disForm()
    {
        return view("loginForm");
    }
    public function procLogin(Request $request)
    {
        // $request->all();
        return "Email: ".$request->emailForm." Password: ".$request->passForm;
    }
}
