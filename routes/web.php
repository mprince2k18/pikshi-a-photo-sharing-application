<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts','PostController@index')->name('post.index');
Route::post('/post/store','PostController@store')->name('post.store');
Route::get('/post/{id}/{slug}','PostController@details')->name('post.details');

Route::get('/profile/{id}/{slug}','ProfileController@index')->name('profile.index');

Route::get('/notification/{id}/{slug}','NotificationController@index')->name('notification.index');
Route::get('/mark/as/read/{notification}','NotificationController@update')->name('mark.as.read');
Route::get('/mark/as/all/read/{notification}','NotificationController@all_update')->name('mark.as.all.read');

Route::get('/download/{id}/{slug}','DownloadedController@download')->name('download');
Route::post('/download/store/{id}','DownloadedController@store')->name('download.store');
Route::post('/loved/{id}','LovedController@store')->name('loved.store');

Route::post('/comment/{id}','CommentController@store')->name('comment.store');

Route::post('autocomplete', 'SearchController@search')->name('autocomplete');

Route::get('/','PostController@show')->name('post.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registration', 'FrontendController@store')->name('user_register');
Route::post('/user/update/{id}', 'ProfileController@update')->name('user_update');
