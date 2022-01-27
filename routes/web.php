<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userHome;
use App\Http\Controllers\passDataValue;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}',[homeController::class,"index"])->name("home.index");
// Route::get('/usersHome', function () {
//     return view("userHome");
// });
Route::get('/userHomeCtrl', [userHome::class,"index"])->name("userHome.index");
Route::get('/passWelcome', [passDataValue::class,"index"])->name("passDataValue.index");

