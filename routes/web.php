<?php


Route::get('/', 'HomeController@index');
Auth::routes();


Route::get('fileshare', 'FileshareController@index');
Route::get('phones', 'PhonesController@index');
Route::get('conferences', 'ConferencesController@index');
Route::get('news/{id}', 'HomeController@getNews');
/*
 * Админка
 */
Route::group(['prefix'=>'admin','middleware' => ['auth']], function()
{

    Route::resource('/', 'Admin\AdminController');
    Route::resource('news', 'Admin\NewsAdminController');
    Route::get('test', 'Admin\AdminController@test');
    Route::get('user/profile', function()
    {
        return dd('user/profile');
    });


});
