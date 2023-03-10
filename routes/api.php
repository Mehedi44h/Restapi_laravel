<?php

// use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\dummyApi;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/students', [StudentController::class, 'index']);
Route::post('/register',[UserController::class,'register']);

// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/{id}', [StudentController::class, 'show']);
// Route::post('/students', [StudentController::class, 'store']);
// Route::patch('/students/{id}', [StudentController::class, 'update']);
// Route::delete('/students/{id}', [StudentController::class, 'destroy']);