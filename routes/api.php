<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Rotas que necessitam de token jwt para serem acessadas.
Route::group([
    'middleware' => ['jwt.verify'],
    'prefix' => 'v1'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::get('store', [StoreController::class, 'index']);
    Route::get('store/{id}', [StoreController::class, 'show']);
    Route::post('store', [StoreController::class, 'store']);
    Route::put('store/{id}', [StoreController::class, 'update']);
    Route::delete('store/{id}', [StoreController::class, 'destroy']);
});

//Rotas que não necessitam de token jwt para serem acessadas.
Route::group([
    'prefix' => 'v1'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
});
