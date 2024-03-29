<?php

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


Route::get('/',[\App\Http\Controllers\PersonalController::class,'index']);
Route::post('/store',[\App\Http\Controllers\PersonalController::class,'contact']);
Route::get('download/{pdf}',[\App\Http\Controllers\PersonalController::class,'download']);
