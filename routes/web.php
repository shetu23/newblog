<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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
});

Auth::routes();

Route::middleware(['auth','user-role:author'])->group(function(){
Route::get("/home",[HomeController::class,'authorHome'])->name('home');
});

Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get("/admin/home",[HomeController::class,'adminHome'])->name('home.admin');
    });

Route::middleware(['auth','user-role:super_admin'])->group(function(){
    Route::get("/super_admin/home",[HomeController::class,'super_adminHome'])->name('home.super_admin');
    });

    Route::post('/',[PostController::class,'store'])->name('savepost');
    Route::get('/home/create',[PostController::class,'create']);

   // Route::get('/index',[postController::class,'index']);
   // Route::get('/show',[postController::class,'show']);
