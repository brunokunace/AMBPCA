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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => 'category', 'namespace' => 'Api'], function () {

    Route::get('', [
        'uses' => 'CategoryController@index'
    ]);
    Route::get('/{id}', [
        'uses' => 'CategoryController@get'
    ]);
    Route::post('', [
        'uses' => 'CategoryController@post'
    ]);
    Route::put('/{id}', [
        'uses' => 'CategoryController@put'
    ]);
    Route::delete('/{id}', [
        'uses' => 'CategoryController@delete'
    ]);
});
Route::group(['prefix' => 'post', 'namespace' => 'Api'], function () {

    Route::get('', [
        'uses' => 'PostController@index'
    ]);
    Route::get('/{id}', [
        'uses' => 'PostController@get'
    ]);
    Route::post('', [
        'uses' => 'PostController@post'
    ]);
    Route::put('/{id}', [
        'uses' => 'PostController@put'
    ]);
    Route::delete('/{id}', [
        'uses' => 'PostController@delete'
    ]);
});
Route::group(['prefix' => 'contributor', 'namespace' => 'Api'], function () {

    Route::get('', [
        'uses' => 'ContributorController@index'
    ]);
    Route::get('/{id}', [
        'uses' => 'ContributorController@get'
    ]);
    Route::post('', [
        'uses' => 'ContributorController@post'
    ]);
    Route::put('/{id}', [
        'uses' => 'ContributorController@put'
    ]);
    Route::delete('/{id}', [
        'uses' => 'ContributorController@delete'
    ]);
});
