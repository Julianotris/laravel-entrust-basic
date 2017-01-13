<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get('/home', function(){
    return view('example.main-template-table');
});

Route::group(['middleware' => ['auth']], function () {

    # example template
    Route::get('/test-dashboard', function(){
        return view('example.main-template-dashboard');
    });

    Route::get('/test-table', function(){
        return view('example.main-template-table');
    });


    Route::get('/', function(){
        return view('example.main-template-table');
    });

    # Registration Routes
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');

    # User Mangement
    Route::group(['middleware' => ['role:superadmin']], function() {
        Route::get('/user-management', 'UsersController@index');
        Route::get('/datatable/userdata', 'UsersController@getData');
    });


    # route for test and dump after login
    Route::get('dumpin', function(){
        dd(Auth::user()->roles->first()->name);
    });

    # In Progress Fitur
    Route::get('in-progress', function(){
        return view('errors.inprogress');
    });

});

# route for test and dump without login
Route::get('dumpout', function(){
    dd('test');
});
