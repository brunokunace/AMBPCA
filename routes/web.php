<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/contato', function () {
    return view('contactus.contactus');
})->name('contactus');

Route::get('/noticias', [
    'uses' => 'BlogController@index'
])->name('blog');

Route::get('/noticias/{id}', [
    'uses' => 'BlogController@show'
])->name('blog.show');


Route::get('/pagseguro', [
    'uses' => 'PagseguroController@pagseguro'
]);

Auth::routes();
