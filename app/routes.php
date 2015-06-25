<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','BlogsController@index');

Route::get('users/login','UsersController@getLogin');
Route::post('users/login','UsersController@login');
Route::get('users/logout', 'UsersController@logout');

Route::get('posts/create/{id}', 'PostsController@create', function($id_blog){
    return $id_blog;
});
Route::post('posts/{id}', 'PostsController@store', function($id_blog){
    return $id_blog;
});


Route::get('blogs/display/{id}', 'BlogsController@getBlogs', function($id_blog){
    return $id_blog;
});


Route::get('comments/create/{id}', 'CommentsController@create', function($id_post){
    return $id_post;
});

Route::post('comments/{id}', 'CommentsController@store', function($id_post){
    return $id_post;
});


Route::resource('blogs', 'BlogsController');
Route::resource('users','UsersController');
Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');
