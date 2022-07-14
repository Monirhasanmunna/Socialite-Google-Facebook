<?php

use App\Http\Controllers\FacebookSocialiteController;
use App\Http\Controllers\GoogleSocialiteController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route For Google Socialite
Route::get('login/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('callback/google/login', [GoogleSocialiteController::class, 'handleCallback']);

//Route For Facebook Socialite
Route::get('login/facebook', [FacebookSocialiteController::class, 'redirectToGoogle'])->name('facebook.login');
Route::get('callback/facebook/login', [FacebookSocialiteController::class, 'handleCallback']);

