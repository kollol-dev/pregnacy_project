<?php

// Customer Routes
Route::group([
'as' => 'dashboard.',
'prefix' => 'dashboard',
],
function(){
Route::get('/', 'DashboardController@index')->name('index');
}
);