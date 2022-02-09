<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userHome;
use App\Http\Controllers\passDataValue;
use App\Http\Controllers\clientServer;
use App\Http\Controllers\fluentString;
use App\Http\Controllers\logInProc;
use App\Http\Controllers\sessionLearn;
use App\Http\Controllers\postControl;
use App\Http\Controllers\learningJoin;
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
Route::get('/listData', [clientServer::class,"listData"])->name("clientServer.listData");
Route::get('/getIdItems/{id}', [clientServer::class,"getIdItems"])->name("clientServer.getIdItems");
Route::get('/makeIdItems', [clientServer::class,"makeIdItems"])->name("clientServer.makeIdItems");
Route::get('/editIdItems/{id}', [clientServer::class,"editIdItems"])->name("clientServer.editIdItems");
Route::get('/deleteIdItems/{id}', [clientServer::class,"deleteIdItems"])->name("clientServer.deleteIdItems");
Route::get('/deleteIdItems/{id}', [clientServer::class,"deleteIdItems"])->name("clientServer.deleteIdItems");
Route::get('/fluentProc', [fluentString::class,"fluentProc"])->name("fluentString.fluentProc");
Route::get('/disForm', [logInProc::class,"disForm"])->name("logInProc.disForm");
Route::post('/procLogin', [logInProc::class,"procLogin"])->name("logInProc.procLogin");
Route::get('/sessionCheck', [sessionLearn::class,"sessionCheck"])->name("sessionLearn.sessionCheck");
Route::get('/sessionSet', [sessionLearn::class,"sessionSet"])->name("sessionLearn.sessionSet");
Route::get('/sessionRemove', [sessionLearn::class,"sessionRemove"])->name("sessionLearn.sessionRemove");
Route::get('/displayItem', [postControl::class,"displayItem"])->name("postControl.displayItem");
Route::get('/viewAddItem', [postControl::class,"viewAddItem"])->name("postControl.viewAddItem");
Route::post('/addPost', [postControl::class,"addPost"])->name("postControl.addPost");
Route::get('/deletePost/{id}', [postControl::class,"deletePost"])->name("postControl.deletePost");
Route::get('/updatePostView/{id}', [postControl::class,"updatePostView"])->name("postControl.updatePostView");
Route::post('/proccessUpdate', [postControl::class,"proccessUpdate"])->name("postControl.proccessUpdate");
Route::get('/innerJoin', [learningJoin::class,"innerJoin"])->name("learningJoin.innerJoin");
Route::get('/leftJoin', [learningJoin::class,"leftJoin"])->name("learningJoin.leftJoin");
Route::get('/rightJoin', [learningJoin::class,"rightJoin"])->name("learningJoin.rightJoin");
Route::get('/displayByModel', [postControl::class,"displayByModel"])->name("postControl.displayByModel");