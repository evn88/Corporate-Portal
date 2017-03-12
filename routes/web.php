<?php


Route::get('/', 'HomeController@index');
Auth::routes();


Route::get('fileshare', 'FileshareController@index');
Route::get('phones', 'PhonesController@index');
Route::get('conferences', 'ConferencesController@index');
Route::get('news/{id}', 'HomeController@getNews')->where('id', '[0-9]+');
Route::get('news/offer', 'HomeController@offerNews');
Route::resource('profile', 'ProfileController');
/*
 * Админка
 */
Route::group(['prefix'=>'admin','middleware' => ['auth','role:root|programmer|telephonist']], function()
{

    Route::resource('/', 'Admin\AdminController');
    Route::resource('news', 'Admin\NewsAdminController');
    Route::resource('users', 'Admin\UsersAdminController');
    Route::get('test', 'Admin\AdminController@test');

});
