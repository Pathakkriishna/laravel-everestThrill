<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/',[HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::post('save',[UserController::class, 'save'])->name('save');
Route::get('/delete/{id}',[UserController::class, 'delete'])->name('delete');
Route::get('/edit/{id}',[HomeController::class, 'edit'])->name('edit');
Route::post('updateData',[UserController::class, 'updateData'])->name('updateData');
Route::get('register',[HomeController::class, 'register'])->name('register');
Route::post('register',[UserController::class, 'register'])->name('register');
Route::get('login',[HomeController::class, 'login'])->name('login');
Route::post('login',[UserController::class, 'login'])->name('login');
Route::get('logout',[HomeController::class, 'logout'])->name('logout');
