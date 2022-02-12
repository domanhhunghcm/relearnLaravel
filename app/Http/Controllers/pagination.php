<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class pagination extends Controller
{
    public function allUser() {
        $users=User::paginate(10);
        return view("userPage",compact("users"));
    }
}
