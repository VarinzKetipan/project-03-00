<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

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

Route::get('/dashboard', function () {
    $c = Category::all();
    $p = Product::all();
    $u = User::all();
    return view('dashboard',compact('c','p','u'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนู User
Route::get('admin/user/index',[UserController::class, 'index'])->name('u.index');

//เมนู category
Route::get('admin/category/category',[CategoryController::class, 'index'])->name('c.category');
Route::get('admin/category/create',[CategoryController::class,'create'])->name('c.create');
Route::post('admin/category/insert',[CategoryController::class,'insert']);
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('admin/category/update/{id}',[CategoryController::class,'update']);
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);


//เมนู Products
Route::get('admin/product/product',[ProductController::class, 'index'])->name('p.product');
Route::get('admin/product/create',[ProductController::class,'create'])->name('p.create');
Route::post('admin/product/insert',[ProductController::class,'insert']);
Route::get('admin/product/edit/{id}',[ProductController::class,'edit'])->name('p.edit');
Route::post('admin/product/update/{id}',[ProductController::class,'update']);
Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);

