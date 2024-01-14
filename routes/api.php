<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// route::middleware('auth:sanctum')->group(function() {


//     route::get('/users', [UserController::class, 'index']);
//     route::post('/users', [UserController::class, 'store']);
//     route::get('/users/{id}  ', [UserController::class, 'show']);
//     route::put('/users/{id}  ', [UserController::class, 'update']);
//     route::delete('/users/{id}  ', [UserController::class, 'delete']);

// });



// from vuexy



Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    Route::group(['middleware' => 'auth:sanctum'], function() {
      Route::get('logout', [AuthController::class, 'logout']);
      Route::get('user', [AuthController::class, 'user']);
    });
});



