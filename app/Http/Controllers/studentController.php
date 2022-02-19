<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student as Students;
class studentController extends Controller
{
    public function fetchData()
    {
        $fetch=Students::whereBetween("id",[33,44])->get();
        return $fetch;
    }
}
