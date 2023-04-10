<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/axis','App\Http\Controllers\axisController@store'); //create datos
Route::get('/axis','App\Http\Controllers\axisController@index');  // mostrar datos
Route::put('/axis/{id}','App\http\Controllers\axisController@update');  // update datos
Route::delete('/axis/{id}','App\Http\Controllers\axisController@destroy');  // delete datos
