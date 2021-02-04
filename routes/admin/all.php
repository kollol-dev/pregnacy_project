<?php

Route::group(
    [
        'as' => 'admin.',
        'namespace' => 'Admin',
        'prefix' => 'admin',
    ],
    function () {

        include_once 'dashboard/dashboard.php';
    }
);
