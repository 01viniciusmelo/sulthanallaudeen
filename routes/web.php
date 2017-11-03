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

Route::get('/', 'PublicController@index');
Route::get('blog', 'PublicController@blogs');
Route::get('blog/{query}', 'PublicController@blog');
Route::post('searchBlog', 'PublicController@searchBlog');
Route::get('tag/{query}', 'PublicController@tag');
Route::get('tag/{query}/about', 'PublicController@tagAbout');
Route::get('contact', 'PublicController@contact');
Route::post('contactSA', 'PublicController@contactSA');
Route::get('login', [ 'as' => 'login', 'uses' => 'PublicController@login']);
Route::post('doLogin', 'PublicController@doLogin');
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Controller@logout']);
#Cron
Route::get('cron', 'CronController@index');
#Admin Panel
Route::get('admin/dashboard', 'AdminController@index');
#Start of Blog
Route::get('admin/blog', 'AdminController@blog')->name('blog');;
Route::get('admin/blog/create', 'AdminController@blogCreate');
Route::post('admin/blog/write', 'AdminController@blogCreateData');
Route::get('admin/blog/edit/{id}', 'AdminController@blogEdit');
Route::post('admin/blog/edit/update', 'AdminController@blogUpdateData');
Route::get('admin/blog/status/{id}/{status}', 'AdminController@blogStatus');
Route::get('admin/blog/delete/{id}', 'AdminController@blogDelete');
#End of Blog
#Start of Tag
Route::get('admin/tag', 'AdminController@tag')->name('tag');;
Route::get('admin/tag/create', 'AdminController@tagCreate');
Route::post('admin/tag/write', 'AdminController@tagCreateData');
Route::get('admin/tag/edit/{id}', 'AdminController@tagEdit');
Route::post('admin/tag/edit/update', 'AdminController@tagUpdateData');
Route::get('admin/tag/delete/{id}', 'AdminController@tagDelete');
#End of Tag

#Maintenance 
Route::get('SyncBlogCount', 'AdminController@SyncBlogCount');