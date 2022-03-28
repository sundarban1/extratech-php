<?php

use App\Http\Controllers\UserController;
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


Route::get('/user/register', [UserController::class,'register'])->name('user.register');
Route::get('/user/view', [UserController::class,'view'])->name('user.view');
Route::post('/user/store', [UserController::class,'store'])->name('user.store');

Route::get('/user/login', [UserController::class,'login'])->name('user.login');
Route::post('/user/auth', [UserController::class,'auth'])->name('user.auth');

Route::get('/user/forgotpassword', [UserController::class,'forgotpassword'])->name('user.forgotpassword');
Route::post('/user/resetpassword', [UserController::class,'resetpassword'])->name('user.resetpassword');

Route::get('/user/{id}/edit', [UserController::class,'edit'])->name('user.edit');
Route::post('/user/update', [UserController::class,'update'])->name('user.update');

