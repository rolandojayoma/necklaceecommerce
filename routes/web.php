<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrossController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');


Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/cross', [CrossController::class, 'cross'])->name('cross');
Route::get('/linkup', [CrossController::class, 'linkUp']);
Route::get('/gold', [CrossController::class, 'gold']);
Route::get('/cart_double', [CrossController::class, 'cartDouble']);
Route::get('/cart_linkup', [CrossController::class, 'cartLinkup']);
Route::get('/cart_gold', [CrossController::class, 'cartGold']);
Route::get('/admin', [AdminController::class, 'admin'])->name('adminpage');    
Route::get('/user', [UserController::class, 'user']);
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');