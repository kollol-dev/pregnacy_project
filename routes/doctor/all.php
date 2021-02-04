<?php

Route::group(
    [
        'as' => 'doctor.',
        'namespace' => 'Doctor',
        'prefix' => 'doctor',
    ],
    function () {

        include_once 'dashboard/dashboard.php';
    }
);
