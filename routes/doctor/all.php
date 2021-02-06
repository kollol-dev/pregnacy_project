<?php

Route::group(['as' => 'doctor.', 'namespace' => 'Doctor', 'prefix' => 'doctor',], function () {
    include_once 'dashboard/dashboard.php';
});


// view pages
// Route::get('/questions', 'QuestionController@getAllQuestions')->name('question');
// Route::get('/questions/single/{id}', 'QuestionController@getQuestionById')->name('question-single');


// // doc api routes
Route::prefix('/app/doctor')->group(function () {
    Route::post('/add/comment', 'QuestionController@addComment');
    Route::post('/add/reply', 'QuestionController@addReply');
});
