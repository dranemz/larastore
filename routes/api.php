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

//all Category
Route::get('category', 'CategoryController@index');
//single Category
Route::get('category/{id}',"CategoryController@show");
//create Category
Route::post('category','CategoryController@store');
//update Category
Route::put('category','CategoryController@store');
//delete Category
Route::delete('category/{id}','CategoryController@destroy');
