<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/albums', 'AlbumController@index')->name('albums');
Route::get('/album/create', 'AlbumController@create')->name('make_album');
Route::post('/album', 'AlbumController@store')->name('new_album');
Route::delete('/album/{album}', 'AlbumController@delete')->name('delete_album');

Route::get('/album/{album}/photos', 'PhotoController@index')->name('photos');

Route::get('/upload/select-album', 'UploadController@index')->name('select_album');
Route::get('/upload/photo/{album}', 'UploadController@create')->name('upload');
Route::post('/upload/{album}/photo', 'UploadController@store');

Route::get('/user/settings', 'SettingsController@index');