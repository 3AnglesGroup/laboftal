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

Route::get('marcas','MarcasController@index');
Route::get('categories/{id}','CategoryController@categories');
Route::get('subcategories/{id}','CategoryController@subcategories');
Route::post('category/create','CategoryController@store');
Route::post('subcategory/create','SubcategoryController@store');
Route::post('product/create','ProductController@store');
