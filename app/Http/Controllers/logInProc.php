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
        $validated = $request->validate([
            'emailForm' => 'required|max:255|email|min:5',
            'passForm' => 'required|min:7',
        ]);
        return "Email: ".$request->emailForm." Password: ".$request->passForm;
    }
}
