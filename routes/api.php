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
Route::resource('movie', 'MovieController');
Route::resource('person', 'PersonController');
//Route::resource('User', 'UserController');
Route::resource('country', 'CountryController');
Route::resource('category', 'CategoryController');
Route::resource('language', 'LanguageController');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

