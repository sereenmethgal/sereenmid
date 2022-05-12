<?php

use App\Http\Controllers\MidtermController;
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


Route::get('/', [MidtermController::class,'index']);
Route::get('create', [MidtermController::class,'create']);
Route::post('store', [MidtermController::class,'store']);
Route::get('destroy/{id}', [MidtermController::class,'destroy']);
Route::put('update', [MidtermController::class,'update']);



