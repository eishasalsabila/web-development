<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home.home');
});


Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

/*Route::get('product/show/{id}', [ProductController::class, 'show'])->name('product.show');*/

Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::delete('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

//register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

//logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
?>