<?php

Route::group(
    [
        'as' => 'admin.',
        'namespace' => 'Admin',
        'prefix' => 'admin',
    ],
    function () {

        include_once 'dashboard/dashboard.php';
        include_once 'patient/patient.php';
        include_once 'blog/blog.php';
    }
);
