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
use App\Http\Controllers\pagination;
use App\Http\Controllers\fileUpload;
use App\Http\Controllers\sendMailPro;
use App\Http\Controllers\postController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\resizeControll;
use App\Http\Controllers\companies;
use App\Http\Controllers\testController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\BookController;

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

// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     $nameSet="hunug oi";
//     return view('welcome',compact("nameSet"));
// });

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
Route::get('/learnBlade', function () {
    return view("learnBlade");
});
Route::get('/master', function(){
    return view("master");
});
Route::get('/home', function(){
    return view("home");
});
Route::get('/contact', function(){
    return view("contact");
});
Route::get('/aboutUs', function(){
    return view("aboutUs");
});

Route::get('/userPage',[pagination::class,"allUser"])->name("pagination.allUser");
Route::get('/viewUpload',[fileUpload::class,"viewUpload"])->name("fileUpload.viewUpload");
Route::post('/procUpFile',[fileUpload::class,"procUpFile"])->name("fileUpload.procUpFile");
Route::get('/sendMail',[sendMailPro::class,"sendMail"])->name("sendMailPro.sendMail");
Route::get('/viewAdd',[postController::class,"viewAdd"])->name("postController.viewAdd");
Route::post('/saveAdd',[postController::class,"saveAdd"])->name("postController.saveAdd");
Route::get('/fetchData',[studentController::class,"fetchData"])->name("studentController.fetchData");
Route::get('/viewPost',[postController::class,"viewPost"])->name("postController.viewPost");
Route::get('/viewDetail/{id}',[postController::class,"viewDetail"])->name("postController.viewDetail");
Route::get('/viewDelete/{id}',[postController::class,"viewDelete"])->name("postController.viewDelete");
Route::get('/edit/{id}',[postController::class,"viewEdit"])->name("postController.viewEdit");
Route::post('/editSave',[postController::class,"editSave"])->name("postController.editSave");
Route::get('/addUserPhone',[userHome::class,"addUserPhone"])->name("userHome.addUserPhone");
Route::get('/fetchPhone/{id}',[userHome::class,"fetchPhone"])->name("userHome.fetchPhone");
Route::get('/exportFile',[userHome::class,"exportFile"])->name("userHome.exportFile");
Route::get('/saveRelate',[postController::class,"saveRelate"])->name("userHome.saveRelate");
Route::get('/addRole',[RoleController::class,"addRole"])->name("RoleController.addRole");
Route::get('/addUserRole',[userHome::class,"addUserRole"])->name("userHome.addUserRole");
Route::get('/findUser/{id}',[userHome::class,"findUser"])->name("userHome.findUser");
Route::get('/listAllData',[userHome::class,"listAllData"])->name("userHome.listAllData");
Route::get('/downloadPDF',[userHome::class,"downloadPDF"])->name("userHome.downloadPDF");
Route::get('/displayViewImport',[EmployeeController::class,"displayViewImport"])->name("EmployeeController.displayViewImport");
Route::post('/proccessUpload',[EmployeeController::class,"proccessUpload"])->name("EmployeeController.proccessUpload");
Route::get('/displayViewScale',[resizeControll::class,"displayViewScale"])->name("EmployeeController.displayViewScale");
Route::get('/displayDropZone',[resizeControll::class,"displayDropZone"])->name("EmployeeController.displayDropZone");
Route::post('/scaleImg',[resizeControll::class,"scaleImg"])->name("resizeControll.scaleImg");
Route::post('/saveDrop',[resizeControll::class,"saveDrop"])->name("resizeControll.saveDrop");
Route::get('/addStudentView',[companies::class,"addStudentView"])->name("companies.addStudentView");
Route::get('/displayAll',[companies::class,"displayAll"])->name("companies.displayAll");
Route::get('/viewEdit/{id}',[companies::class,"viewEdit"])->name("companies.viewEdit");
Route::post('/addStore',[companies::class,"addStore"])->name("companies.addStore");
Route::post('/editStore',[companies::class,"editStore"])->name("companies.editStore");
Route::get('/deleteComp/{id}',[companies::class,"deleteComp"])->name("companies.deleteComp");
Route::get('/searchView',[userHome::class,"searchView"])->name("companies.searchView");
Route::get('/searchStore',[userHome::class,"searchStore"])->name("userHome.searchStore");
Route::get('/getFirstLast',[testController::class,"getFirstLast"])->name("testController.getFirstLast");
Route::get('/displayNhanvien',[NhanVienController::class,"displayNhanvien"])->name("NhanVienController.displayNhanvien");
Route::get('/viewBook',[BookController::class,"viewBook"])->name("BookController.viewBook");
Route::get('/getChange/{id}',[BookController::class,"getChange"])->name("BookController.getChange");
Route::post('/saveChange',[BookController::class,"saveChange"])->name("BookController.saveChange");
Route::post('/saveBook',[BookController::class,"saveBook"])->name("BookController.saveBook");
Route::delete('/deleteBook/{id}', [BookController::class,"deleteBook"])->name("BookController.deleteBook");
Route::delete('/deleteAll', [BookController::class,"deleteAll"])->name("BookController.deleteAll");