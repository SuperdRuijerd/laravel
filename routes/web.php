<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::prefix('/users')->middleware('auth')->group(function () {
    Route::get('/list', [App\Http\Controllers\UsersController::class, 'list'])->name('list');
    Route::get('/create', [App\Http\Controllers\UsersController::class, 'create'])->name('create');
})->name('users');
