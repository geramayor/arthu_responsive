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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/buzon','App\Http\Controllers\BuzonController@index');
Route::post('/buzon','App\Http\Controllers\BuzonController@store');
Route::post('/productos','App\Http\Controllers\ProductoController@store');
Route::get('/productos','App\Http\Controllers\ProductoController@index');
Route::get('/productos/{id}','App\Http\Controllers\ProductoController@getproductoid');
Route::put('/updateproductos/{id}','App\Http\Controllers\ProductoController@updateproducto');
Route::delete('/deleteproducto/{id}','App\Http\Controllers\ProductoController@deleteproducto');
Route::get('/usuarios','App\Http\Controllers\Auth\RegisterController@list');
Route::post('/usuarios','App\Http\Controllers\Auth\RegisterController@store');
Route::get('/usuarios/{id}','App\Http\Controllers\Auth\RegisterController@getUserid');
Route::put('/updateusuarios/{id}','App\Http\Controllers\Auth\RegisterController@updateuser');
Route::delete('/deleteusuarios/{id}','App\Http\Controllers\Auth\RegisterController@deleteuser');