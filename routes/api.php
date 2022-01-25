<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return ("hi user");
});

// Route::get('/users/{name}', function ($name) {
//     return ("hi user ".$name);
// });

// Route::get('/users/{name?}', function ($name = null) {
//     return ("hi user ".$name);
// });

// Route::get('/users/{name?}', function ($name = null) {
//     return ("hi user ".$name);
// })->where("name","[a-zA-Z]+");

Route::get('/users/id/{id?}', function ($id = null) {
    return ("hi user have id: ".$id);
});

Route::get('/users/name/{name?}', function ($name = null) {
    return ("hi user have name: ".$name);
});

Route::match(['get', 'post'], '/students', function (Request $request) {
    return "Request method is: ".$request->method();
});