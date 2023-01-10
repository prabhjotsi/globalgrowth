<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;

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
    // website homepage route
Route::get('/', [HomeController::class, 'index'])->name('user.home');

    // user login route
Route::get('/login', [LoginController::class, 'index'])->name('user.login');

    // user register route
 Route::get('/register', [RegisterController::class, 'index'])->name('user.register');