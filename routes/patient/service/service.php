<?php

// Customer Routes
Route::group(['as' => 'service.', 'namespace' => 'Service', 'prefix' => 'service'], function () {
    Route::get('/', 'ServiceController@index')->name('index');


    Route::post('/add-stat', 'ServiceController@addService')->name('add-service');
});
