<?php

use App\Http\Controllers\UsersConnectController;
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

Route::get('/', [UsersConnectController::class, 'index'])->name('user_index');
Route::get('/register', [UsersConnectController::class, 'register'])->name('user_register');