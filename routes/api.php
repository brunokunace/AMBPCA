<?php

use Illuminate\Http\Request;

$routeNames = [
    'category',
    'post',
    'contributor',
    'serviceworkersworker',
    'serviceworkerscategory',
    'law',
    'calendar',
    'gallery'
];

function routes($name)
{
    return Route::group(['prefix' => $name, 'namespace' => "Api"], function () use ($name) {

        Route::get('', [
            'uses' => ucfirst($name)."Controller@index"
        ]);
        Route::get('/{id}', [
            'uses' => ucfirst($name)."Controller@get"
        ]);
        Route::post('', [
            'uses' => ucfirst($name)."Controller@post"
        ]);
        Route::put('/{id}', [
            'uses' => ucfirst($name)."Controller@put"
        ]);
        Route::delete('/{id}', [
            'uses' => ucfirst($name)."Controller@delete"
        ]);
    });
}
array_map("routes", $routeNames);
