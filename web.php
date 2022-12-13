<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MainController;
use App\Http\Controllers\ISCONTROLLER;
use App\Http\Controllers\TestController;
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
    return view('login');
});

Route::get('/messageBot',[MainController::class,  'messageBot']);
Route::any('/display_message',[ISCONTROLLER::class,  'display_message']);

Route::get('/test',[MainController::class,  'test']);
Route::any('/test_message',[TestController::class,  'test_message']);