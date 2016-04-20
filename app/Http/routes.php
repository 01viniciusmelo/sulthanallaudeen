<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

#Under Middleware
Route::group(['middleware' => ['web']], function () {
#Public Resources
Route::get('/', 'AppController@index');
#Login
Route::post('doLogin', 'AppController@doLogin');
#Get CSRF Token
Route::get('getToken', 'AppController@getToken');
#App Configuration
Route::any('getAppConfig', 'Controller@getAppConfig');
#Access Info
Route::any('getDetails', 'Controller@getDetails');
#Views
#Blog
Route::get('blog', 'AppController@blog');
Route::post('blog', 'Controller@getBlogs');
Route::get('blog/{id}', 'AppController@blogData');
Route::post('blogData', 'Controller@getBlog');
#Tag
Route::get('tag/{query}', 'AppController@tagData');
Route::post('tag', 'Controller@getTag');
Route::post('searchBlog', 'AppController@searchBlog');
#Contact
Route::get('contact', 'AppController@contact');
Route::post('sendMail', 'AppController@sendMail');



Route::get('tag/{id}/about', 'PublicController@tagAbout');


#Route::post('tag', 'Controller@tagData');
#Feeds
Route::any('getAllCount', 'AppController@getAllCount');







Route::get('tag/{id}/about', 'PublicController@tagAbout');


Route::get('gallery', 'PublicController@gallery');
Route::get('gallery/{dir}', 'PublicController@galleryExplorer');
Route::get('project', 'PublicController@project');
Route::get('technology', 'PublicController@technology');


#Admin Controller
Route::get('sa', 'PublicController@adminLogin');
Route::post('authAdmin', 'PublicController@authAdminLogin');



Route::get('dashboard', 'HomeController@adminDashboard');
#Blog
Route::get('listblog', 'HomeController@listBlog');
Route::get('writeblog', 'HomeController@writeBlog');
Route::post('postBlog', 'HomeController@postBlog');
Route::get('editblog/{id}', 'HomeController@editBlog');
Route::post('updateBlog', 'HomeController@updateBlog');
#Tag
Route::get('listtag', 'HomeController@listTag');
Route::get('writetag', 'HomeController@writeTag');
Route::post('postTag', 'HomeController@postTag');
Route::get('edittag/{id}', 'HomeController@editTag');
Route::post('updateTag', 'HomeController@updateTag');
#Task
Route::get('listtask', 'HomeController@listTask');
Route::get('createtask', 'HomeController@createTask');
Route::post('postTask', 'HomeController@postTask');
Route::get('edittask/{id}', 'HomeController@editTask');
Route::post('updateTask', 'HomeController@updateTask');
#Category
Route::get('listcat', 'HomeController@listCat');
Route::get('createcat', 'HomeController@createCat');
Route::post('postCat', 'HomeController@postCat');
Route::get('editcat/{id}', 'HomeController@editCat');
Route::post('updateCat', 'HomeController@updateCat');
#Util
Route::get('sys-web-log', 'PublicController@utilSysaxiomWebLog');
#Messages
Route::get('messages', 'HomeController@listMessages');
Route::post('getMessage', 'HomeController@getMessage');
Route::post('messageMarkAsRead', 'HomeController@messageMarkAsRead');
Route::post('notificationAreaMessageList', 'HomeController@notificationAreaMessageList');
Route::post('getMessageCount', 'HomeController@getMessageCount');
#Settings
Route::get('profile-settings', 'HomeController@profileSettings');
Route::post('getAdminProfileSettingsData', 'HomeController@adminProfileSettingsData');
Route::post('updateAdminUserName', 'HomeController@updateAdminUserName');
Route::post('updateAdminEmail', 'HomeController@updateAdminEmail');
Route::post('updateAdminPassword', 'HomeController@updateAdminPassword');
#Config
Route::get('config-contact', 'HomeController@configContact');
Route::post('getAdminContactData', 'Controller@AdminContactData');
Route::post('updateAdminContactData', 'HomeController@updateAdminContactData');
#Logout
Route::get('logout', 'HomeController@logout');

//#New Web Services :: 
//Route::post('appLogin', 'AppController@Login');
//Route::post('getDashboardData', 'AppController@getDashboardData');
//Route::get('sendPush', 'PublicController@sendPush');
//Route::get('sendPushMsg', 'AppController@sendPush');

  });

#Default Auth Route
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
