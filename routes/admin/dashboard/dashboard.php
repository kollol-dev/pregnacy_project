<?php

// Customer Routes
Route::group(['as' => 'dashboard.', 'namespace' => 'Dashboard', 'prefix' => 'dashboard'], function () {
    Route::get('/', 'DashboardController@index')->name('index');

    Route::get('/doctor', 'DashboardController@getDoctors');










    // api routes
    Route::post('/app/add/doctor', 'DashboardController@addDoctor');
});