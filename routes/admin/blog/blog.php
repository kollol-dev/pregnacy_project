<?php

// Customer Routes
Route::group(
    [
        'as' => 'blog.',
        'namespace' => 'Blog',
        'prefix' => 'blog'
    ],
    function () {
        Route::get('/', 'BlogController@index')->name('index');
        Route::get('/add', 'BlogController@create')->name('create');
        Route::post('/store', 'BlogController@store')->name('store');
        Route::get('/delete/{id}', 'BlogController@destroy')->name('destroy');
    }
);
