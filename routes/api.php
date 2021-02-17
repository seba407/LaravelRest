<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Rutas controlador UserController
Route::get('user', [UserController::class,'index']);

Route::put('user/update/{id}', [UserController::class, 'update']);

Route::post('user/create', [UserController::class,'create']);

Route::delete('user/delete/{id}', [UserController::class,'delete']);

Route::get('user/get/{id}', [UserController::class,'getById']);

Route::get('userProfile/get/{id}',[UserController::class,'getUserProfile']);


//Rutas controlador ProfileController
Route::get('profile', [ProfileController::class,'index']);

Route::post('profile/create',[ProfileController::class,'create']);

Route::get('profile/getByUserId/{id}', [ProfileController::class,'getByUserId']);

Route::delete('profile/delete/{id}', [ProfileController::class,'delete']);

Route::get('/profielfadsada','ehco');
