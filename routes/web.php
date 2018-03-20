<?php

Route::get('/','Postscontroller@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/post', 'PostsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
