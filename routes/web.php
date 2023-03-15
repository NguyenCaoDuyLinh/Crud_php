<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NxbController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\Admin;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', [LoginController::class, 'index'])->name('admin.login')->middleware('checklogout');
Route::post('/login', [LoginController::class, 'login'])->name('admin.checklogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::group(['prefix'=>'admin','middleware' => 'admin'], function () {
    Route::get('/dashboard', [LoginController::class, 'getFormAdmin'])->name('admin.index');
    //--
    Route::get('/listproduct', [ProductController::class, 'getListProduct'])->name('product.list');
    Route::post('/save', [ProductController::class, 'store'])->name('product.save');
    Route::get('/addproduct', [ProductController::class, 'create'])->name('product.add');
    Route::get('/editproduct/{Product_Id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/updateproduct/{Product_Id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/search', [ProductController::class, 'search']);
    Route::get('/product/{id}', [ProductController::class, 'viewproduct']);
    Route::post('/find', [ProductController::class, 'find']);

    // --Category
    Route::get('/listcategory', [CategoryController::class, 'index'])->name('category.list');
    Route::get('/addcategory', [CategoryController::class, 'create'])->name('category.add');
    Route::post('/savecategory', [CategoryController::class, 'store'])->name('category.save');
    Route::get('/editcategory/{Category_id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/updatecategory/{Category_id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{Category_id}', [CategoryController::class, 'destroy'])->name('category.delete');
    // -- NXB
    Route::get('/listnxb', [NxbController::class, 'index'])->name('nxb.list');
    Route::get('/addnxb', [NxbController::class, 'create'])->name('nxb.add');
    Route::post('/savenxb', [NxbController::class, 'store'])->name('nxb.save');
    Route::get('/editnxb/{Publishing_Company_ID}', [NxbController::class, 'edit'])->name('nxb.edit');
    Route::post('/updatenxb/{Publishing_Company_ID}', [NxbController::class, 'update'])->name('nxb.update');
    Route::get('/delete/{Publishing_Company_ID}', [NxbController::class, 'destroy'])->name('nxb.delete');
});
Route::get('/home', [HomeController::class, 'index'])->name('user.home');
Route::get('/book', [HomeController::class, 'getAllproducts']);
// --Search

