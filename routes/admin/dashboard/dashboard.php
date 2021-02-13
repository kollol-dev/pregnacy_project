<?php

// Customer Routes
Route::group(['as' => 'dashboard.', 'namespace' => 'Dashboard', 'prefix' => 'dashboard'], function () {
    Route::get('/', 'DashboardController@index')->name('index');

    Route::get('/doctor', 'DashboardController@getDoctors')->name('doctor');
    Route::get('/doctor/add', 'DashboardController@addDoctorBlade')->name('add-doctor');
    Route::get('/doctor/delete/{id}', 'DashboardController@deleteDoctorBlade')->name('delete-doctor');


    Route::get('/services', 'DashboardController@getServices')->name('get-services');




    // api routes
    Route::post('/app/add/doctor', 'DashboardController@addDoctor');
});
