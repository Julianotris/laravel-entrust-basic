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

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {

    # example template
    Route::get('/test-dashboard', function(){
        return view('example.main-template-dashboard');
    });

    Route::get('/test-table', function(){
        return view('example.main-template-table');
    });


    Route::get('/', 'InventoryApp\AplikasiBdgController@getListApp');

    # Registration Routes
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');

    # User Mangement
    Route::group(['middleware' => ['role:superadmin']], function() {
        Route::get('/user-management', 'UsersController@index');
        Route::get('/datatable/userdata', 'UsersController@getData');
    });


    # Inventory App
    Route::get('/dashboard/aplikasi-bandung', 'InventoryApp\AplikasiBdgController@getListApp');
        //---- datatable
        Route::get('/datatable/aplikasi-bandung', 'InventoryApp\AplikasiBdgController@getAplikasiDatatable');
        Route::get('/datatable/inventori-jenis-aplikasi', 'InventoryApp\AplikasiBdgController@getJenisDatatable');
        Route::get('/datatable/inventori-status-aplikasi', 'InventoryApp\AplikasiBdgController@getStatusDatatable');
        Route::get('/datatable/inventori-user-aplikasi', 'InventoryApp\AplikasiBdgController@getUserDatatable');
        Route::get('/datatable/skpd-aplikasi', 'InventoryApp\AplikasiBdgController@getSkpdDatatable');

    # Egratifikasi
    Route::get('/dashboard/egratifikasi', 'Egratifikasi\LaporanController@getListLaporan');


    # route for test and dump after login
    Route::get('dumpin', function(){
        dd(Auth::user()->roles->first()->name);
    });

});

# route for test and dump without login
Route::get('dumpout', function(){
    dd('test');
});
