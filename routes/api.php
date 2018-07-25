<?php

use Illuminate\Http\Request;

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


//all Products
Route::get('product', 'ProductController@index');

//single product
Route::get('product/{id}',"ProductController@show");

//create product
Route::post('product','ProductController@store');
//update product
Route::put('product','ProductController@store');

//delete product
Route::delete('product/{id}','ProductController@destroy');