<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::any('valuechains',[\App\Http\Controllers\APISController::class,'valuechains']);
Route::any('valuechains/{id}',[\App\Http\Controllers\APISController::class,'valuechainsparams']);

Route::any('partners',[\App\Http\Controllers\APISController::class,'partners']);
Route::any('partners/{id}',[\App\Http\Controllers\APISController::class,'partnersparams']);

Route::any('research_activities',[\App\Http\Controllers\APISController::class,'researchActitity']);
Route::any('research_activities/{id}',[\App\Http\Controllers\APISController::class,'researchActitityparams']);