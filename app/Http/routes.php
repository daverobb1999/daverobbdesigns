<?php

use App\Projects;
use App\Http\HomeController;

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/', 'PortfolioController@index');

Route::get('/home/', 'PortfolioController@index');

Route::get('/project/{id}', 'PortfolioController@show');

//Route::post('dashboard/store', ['uses' => 'ProjectController@store']);


//Route::resource('dashboard1', 'HomeController');

Route::group(['middleware' => ['web']], function (){

    Route::get('dashboard', 'ProjectController@index');
    Route::resource('dashboard', 'ProjectController');
});

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
/*Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('dashboard', 'HomeController@index');

    Route::get('/create-project', 'HomeController@create');

    Route::get('/edit-project/{id}', 'HomeController@edit');

    Route::post('/create-project',
        ['as' => 'project_store', 'uses' => 'HomeController@store']);
});*/
