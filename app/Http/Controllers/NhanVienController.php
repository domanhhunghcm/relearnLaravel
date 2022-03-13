<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\nhanVienDataTable;

class NhanVienController extends Controller
{
    public function displayNhanvien(nhanVienDataTable $dataTable)
    {
        //dd($dataTable);
        return $dataTable->render("nhanvienDis");
    }
}
