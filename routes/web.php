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


#Public Resources
    Route::get('/', 'PublicController@index');
    Route::get('blog', 'PublicController@blog');
    Route::get('blog/{url}', 'PublicController@blogData');
    Route::post('searchBlog', 'AppController@searchBlog');