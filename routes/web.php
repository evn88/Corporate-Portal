<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/fileshare', 'FileshareController@index');
Route::get('/phones', 'PhonesController@index');
Route::get('/conferences', 'ConferencesController@index');

Route::group(['prefix'=>'admin','middleware' => ['auth']], function()
{
    Route::get('/', function()
    {
        return view('admin.dashboard');
    });

Route::get('/test', 'Admin\AdminController@test');

/*
    Route::get('user/profile', function()
    {
        return dd('user/profile');
    });
*/

});
