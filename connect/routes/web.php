<?php

use App\Http\Controllers\UsersForgotPassword;
use App\Http\Controllers\UsersLoginController;
use App\Http\Controllers\UsersRegisterController;
use App\Models\UsersConnect;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UsersLoginController::class, 'index'])->name('user_index');
Route::post('/auth', [UsersLoginController::class, 'auth'])->name('user_auth');


Route::get('/register', [UsersRegisterController::class, 'register'])->name('user_register');
Route::post('/store', [UsersRegisterController::class, 'store'])->name('user_store');

Route::get('/forgotpassword', [UsersForgotPassword::class, 'forgotpassword'])->name('user_forgotpassword');
Route::post('/resetpassword', [UsersForgotPassword::class, 'resetpassword'])->name('user_resetpassword');