<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/login',[LoginController::class,'login'])->name('admin.checklogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get('/dashboard',[AdminController::class,'index'])->name('admin.index');
Route::get('/listproduct',[ProductController::class,'getListProduct'])->name('product.list');
Route::get('/listadmin',[AdminController::class,'getListAdmin'])->name('admin.list');