<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\templateMail;
use Illuminate\Support\Facades\Mail;

class sendMailPro extends Controller
{
    public function sendMail()
    {
        $details=[
            "title"=>"dohung title",
            "body"=>"body hung do"
        ];
        Mail::to("makudotari@gmail.com")->send(new templateMail($details));
        return "email send";
    }
}
