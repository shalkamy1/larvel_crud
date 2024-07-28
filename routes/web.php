<?php

// use app\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admincontroller;
use app\Http\Controllers\newconteller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

route::prefix("admin")->group(function(){

    Route::get("list",[Admincontroller::class,"index"])->name("admin.index");
    Route::get("create",[Admincontroller::class,"create"])->name("admin.create");
    Route::get("edit/{id}",[Admincontroller::class,"edit"])->name("admin.edit");
    Route::post("store",[Admincontroller::class,"store"])->name("admin.store");
    Route::get("show/{id}",[Admincontroller::class,"show"])->name("admin.show");
    Route::get("destroy/{id}",[Admincontroller::class,"destroy"])->name("admin.destroy");
    Route::post("update/{id}",[Admincontroller::class,"update"])->name("admin.update");

});


