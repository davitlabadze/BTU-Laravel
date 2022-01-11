<?php

use App\Http\Controllers\CountryController;
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


Route::get('/countries/list',[CountryController::class,'list'])->middleware('auth:sanctum');
Route::get('/countries/visited',[CountryController::class,'visitedCounty'])->middleware('auth:sanctum');
Route::get('/countries/tovisit',[CountryController::class,'toVistiCountry'])->middleware('auth:sanctum');

Route::post('/add-visited-country',[CountryController::class,'addVisitedCountry'])->middleware('auth:sanctum');
