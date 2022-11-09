<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManhwaListController;
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

Route::view('/manhwa', 'manhwa');
Route::get('manhwa', [ManhwaListController::class,'show']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/webpage','App\Http\Controllers\WebpageController@home');