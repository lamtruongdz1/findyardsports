<?php

use App\Http\Controllers\YardController;
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

Route::get('/',[YardController::class,'index']);
Route::get('/san/tim',[YardController::class,'yard']);
Route::get('/san-bong/{param}',[YardController::class,'yard_district']);
Route::get('/san/{param}',[YardController::class,'show']);
Route::get('autocomplete', [YardController::class, 'autocomplete'])->name('autocomplete');

