<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostController@index');
Route::resource('tasks','TasksController');
Route::resource('posts','PostController');
Route::post('posts/store','PostController@store');
Route::post('posts/post/{post}/addcomment','CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
