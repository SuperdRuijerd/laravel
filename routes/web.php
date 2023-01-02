<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/user_create', [HomeController::class, 'user_create'])->name('user_create');
Route::post('/user_create_save', [HomeController::class, 'user_create_save'])->name('user_create_save');

Route::get('/user_edit/{id}', [HomeController::class, 'user_edit'])->name('user_edit');
Route::match(['get', 'post'],'/user_edit_save/{id}', [HomeController::class, 'user_edit_save'])->name('user_edit_save');



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logincheck', [AuthController::class, 'logincheck'])->name('logincheck');