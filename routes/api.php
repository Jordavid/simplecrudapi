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

// List all Articles
Route::get('articles', 'ArticleController@index');

// List a single Article
Route::get('article/{id}', 'ArticleController@show');

// Create an Article 
Route::post('article', 'ArticleController@store');

// Update Article
Route::patch('article/{id}', 'ArticleController@store');

// Delete Article
Route::delete('article/{id}', 'ArticleController@destroy');

// List All Users
Route::get('users', 'UserController@index');

// List a single User
Route::get('user/{id}', 'UserController@show');

// Create a User 
Route::post('user', 'UserController@store');

// Update User
Route::put('users', 'UserController@store');

// Delete User
Route::delete('users', 'UserController@destroy');

// List All Produts
Route::get('products', 'ProductsController@index');

// List a single Product
Route::get('product/{id}', 'ProductsController@show');

// Create a Product 
Route::post('product', 'ProductsController@store');

// Update Product
Route::put('products', 'ProductsController@store');

// Delete Product
Route::delete('products', 'ProductsController@destroy');

