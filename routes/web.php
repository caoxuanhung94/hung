<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CookieController;

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
    // $users = User::get()->toArray();
    // return view('welcome');
    echo "Hello";
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::post('/login', [LoginController::class, 'checkLogin'])->name('check_login');
Route::get('/cookie', [CookieController::class, 'index']);
Route::get('/get-cookie', [CookieController::class, 'getCookie']);