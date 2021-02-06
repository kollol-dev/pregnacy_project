<?php

// Customer Routes
Route::group(['as' => 'dashboard.', 'namespace' => 'Dashboard', 'prefix' => 'dashboard',], function () {
    Route::get('/', 'DashboardController@index')->name('index');
});
