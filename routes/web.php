<?php

use App\Http\Controllers\YardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
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
// Home routes
Route::get('/',[YardController::class,'index'])->name('home');
Route::get('/home',[YardController::class,'index']);
Route::get('/san/tim',[YardController::class,'yard']);
Route::get('/san-bong/{param}',[YardController::class,'yard_district']);
Route::get('/san/{param}',[YardController::class,'show']);
Route::get('/datsan',[YardController::class,'pay'])->name('pay');
Route::get('/dat-san/{param}',[YardController::class,'datsan'])->name('datsan');
// thanh toán
Route::get('/tickets',[YardController::class,'pay_details'])->name('pay-detail');
Route::get('autocomplete', [YardController::class, 'autocomplete'])->name('autocomplete');
Route::post('/themtimesan',[YardController::class,'themtimesan'])->name('themtimesan');
Route::post('/thanhtoansan',[YardController::class,'thanhtoansan'])->name('thanhtoansan');
Route::get('/vnpay_return', [YardController::class, 'return']);
// comment
Route::post('/comment', [CommentController::class,'store'])->name('comment.add');



// Blog routes
Route::get('news', [BlogController::class, 'index'])->name('news');
Route::get('/news/{param}',[BlogController::class,'new_detail']);

Route::get('/search',[YardController::class,'search']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// login with social


// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);


//congthanhtoan

// Route::post('/vnpay',[YardController::class,'vnpay']);
