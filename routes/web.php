<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
// })->middleware('guest');
Route::get('/', [LoginController::class, 'index'])->name('auth.login');

Route::get('/auth/register', [RegisterController::class, 'index'])->name('auth.register');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);

Route::get('/my_posts', [PostController::class, 'myPost'])->name('posts.myPost');
