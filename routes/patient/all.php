<?php

Route::group(
    [
        'as' => 'patient.',
        'namespace' => 'Patient',
        'prefix' => 'patient',
    ],
    function () {

        include_once 'dashboard/dashboard.php';
        include_once 'service/service.php';
    }
);




// patient api routes
Route::prefix('/app/patient')->group(function () {
    Route::post('/add/question', 'QuestionController@addQuestion');
    Route::post('/add/comment', 'QuestionController@addComment');
    Route::post('/add/reply', 'QuestionController@addReply');
});
