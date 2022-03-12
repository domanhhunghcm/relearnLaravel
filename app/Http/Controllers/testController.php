<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function getFirstLast()
    {
        return splitName("hung do")[0];
    }
}
