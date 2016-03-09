<?php

use App\Projects;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});*/

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/', 'PortfolioController@index');

Route::get('/home/', 'PortfolioController@index');

Route::get('/home/project/{id}', 'PortfolioController@show');



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
    //Contact Page
    Route::get('contact', 'ContactController@getContact');

    //Form request:: POST action will trigger to controller
    Route::post('contact_request','ContactController@getContactUsForm');

});


/*
// link to project
Route::get('project/{project_name}', function($project_name)
{
    /*$project = Post::where('project_name', '=', $project_name);
    return view('portfolio-item')
        ->with('project_name',$project_name);
    return view('portfolio-item');

});*/