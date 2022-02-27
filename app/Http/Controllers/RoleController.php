<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles=[
            ["name"=>"kaichou"],
            ["name"=>"kachou"],
            ["name"=>"shachou"],
            ["name"=>"buchou"],
        ];
        role::insert($roles);
        return "add data finish";
    }
}
