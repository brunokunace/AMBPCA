<?php

use Illuminate\Http\Request;

$routeNames = [
    'Category',
    'Post',
    'Contributor'
];

function routes($name)
{
    return Route::group(['prefix' => $name, 'namespace' => "Api"], function () use ($name) {

        Route::get('', [
            'uses' => "{$name}Controller@index"
        ]);
        Route::get('/{id}', [
            'uses' => "{$name}Controller@get"
        ]);
        Route::post('', [
            'uses' => "{$name}Controller@post"
        ]);
        Route::put('/{id}', [
            'uses' => "{$name}Controller@put"
        ]);
        Route::delete('/{id}', [
            'uses' => "{$name}Controller@delete"
        ]);
    });
}
array_map("routes", $routeNames);
