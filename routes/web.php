<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::post('/posts/save', 'HomeController@savePost');

Route::get('/posts/create', 'HomeController@createPost');

Route::get('/posts/{id}', 'HomeController@showPost');

Route::post('/posts/{id}/comments', 'HomeController@saveComment');

Route::resource('dashboard/posts', PostController::class);

Route::resource('dashboard/users', UserController::class);

//Route::view('/dashboard', 'admin/users');
//Route::get('/dashboard/users', 'UserController@index');

//Route::get('/dashboard/posts', 'PostController@index');

Auth::routes();
