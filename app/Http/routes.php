<?php

use App\Projects;


Route::get('/resume', function () {
    return view('resume');
});

Route::get('/', 'PortfolioController@index');

Route::get('/home/', 'PortfolioController@index');

Route::get('/project/{id}', 'PortfolioController@show');



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    Route::get('contact', 'ContactController@getContact');
    Route::post('contact_request', 'ContactController@getContactUsForm');
});

// Admin area
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
