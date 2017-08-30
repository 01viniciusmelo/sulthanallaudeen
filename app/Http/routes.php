<?php
#Allowing Cross Origin Temporarily for Mobile Service
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization, Content-Type');
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

#Start of SA Site works
#Public Resources
    Route::get('/', 'AppController@index');
#Admin Config Data
    Route::post('getAdminContactData', 'Controller@AdminContactData');
#Get CSRF Token
    Route::get('getToken', 'AppController@getToken');
#Login
    Route::post('doLogin', 'AppController@doLogin');
#App Configuration
    Route::post('getAppConfig', 'Controller@getAppConfig');
#Feeds
    Route::post('getAllCount', 'AppController@getAllCount');
#Access Info
    Route::get('getDetails', 'Controller@getDetails');
#Blog
    Route::get('blog', 'AppController@blog');
    Route::post('blog', 'Controller@getBlogs');
    Route::get('blog/{id}', 'AppController@blogData');
#Search Blog
    Route::post('searchBlog', 'AppController@searchBlog');
#Tag
    Route::get('tag/{query}', 'AppController@tagData');
    Route::post('tag', 'Controller@getTag');
    Route::get('tag/{id}/about', 'AppController@tagAbout');
#Contact
    Route::get('contact', 'AppController@contact');
    Route::post('sendMail', 'AppController@sendMail');

##Admin Panel
    Route::get('sa', 'AppController@adminLogin');
    Route::post('authAdmin', 'AppController@authAdminLogin');
Route::group(['middleware' => ['auth']], function () {
#####Admin Controller#######
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
#Util
    Route::get('time', 'AppController@time');
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
    Route::post('updateAdminContactData', 'HomeController@updateAdminContactData');
#Migrate
    Route::get('migrate', 'HomeController@migrate');
######Logout#####
    Route::get('logout', 'HomeController@logout');

//#New Web Services to be implemented in Mobile Side::
//Route::get('sendPushMsg', 'AppController@sendPush');
#Under Middleware
});
#Start of SA Site works

#For Native Mobile App - Temporary service
Route::post('updateStatus', 'Controller@updateStatus');

#Bot Works

Route::get('chat', 'ChatController@index');

#Testing Service
Route::get('/test', 'TestController@index');
Route::get('/test/hash/{string}', 'TestController@hash');
Route::get('/test/fcmPush', 'TestController@fcmPush');
Route::get('/test/tutchapon', 'TestController@Tutchapon'); 
#Cron Job
Route::get('cron', 'CronController@InitCron');
#End of Cron Job
#End of Routes