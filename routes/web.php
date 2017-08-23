<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/albums', 'AlbumController@index')->name('albums');
Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store')->name('new_album');

Route::get('/album/{album}/photos', 'PhotoController@index');

Route::get('/upload/select-album', 'UploadController@index');
Route::get('/upload/photo/{album}', 'UploadController@create')->name('upload_photo');
Route::post('/upload/{album}/photo', 'UploadController@store');

Route::get('/user/settings', 'SettingsController@index');