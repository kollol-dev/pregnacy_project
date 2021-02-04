<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'HomeController@welcome')->name('welcome');


/*===================================
========< admin Routes >=======
===================================*/
Route::group(
    [
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        include_once 'admin/all.php';
    }
);

// /*===================================
// ========< doctor Routes >=======
// ===================================*/

// Route::group(
//     [
//         'middleware' => ['auth', 'doctor'],
//     ],
//     function () {
//         include_once 'doctor/all.php';
//     }
// );

// /*===================================
// ========< patient Routes >=======
// ===================================*/

// Route::group(
//     [
//         'middleware' => ['auth', 'patient'],
//     ],
//     function () {
//         include_once 'patient/all.php';
//     }
// );



Auth::routes();

Route::post('/app/user/login', 'Auth\LoginController@loginWithEmailOrMobile')->name('user_login');

Route::get('/home', 'HomeController@index')->name('welcome');
