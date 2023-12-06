<?php

use App\Http\Controllers\animalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// method get
Route::get('/animals', [AnimalController::class, 'index'] );

//method post
Route::post('/animals', [AnimalController::class, 'store'] );

//method put
Route::put('/animals', [AnimalController::class, 'update'] );

//method delete
Route::delete('/animals', [AnimalController::class, 'destroy'] );

Route::get('/student',[StudentController::class, 'index']);
Route::get('/student/{id}',[StudentController::class, 'show']);
Route::post('/student',[StudentController::class, 'store']);
Route::put('/student/{id}',[StudentController::class, 'update']);
Route::delete('/student/{id}',[StudentController::class, 'destroy']);

