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

//creates a db entry and returns a short link
Route::post('/', [\App\Http\Controllers\CreateController::class, 'create']);

//get everything from database
Route::get('/links', \App\Http\Controllers\LinksController::class);

//get one record from database
Route::get('/link/{link}', \App\Http\Controllers\LinkController::class);
