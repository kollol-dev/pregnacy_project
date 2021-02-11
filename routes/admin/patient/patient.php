<?php

// Customer Routes
Route::group(
    [
        'as' => 'patient.',
        'namespace' => 'Patient',
        'prefix' => 'patient'
    ],
    function () {
        Route::get('/', 'PatientController@index')->name('index');
    }
);
