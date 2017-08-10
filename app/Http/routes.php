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
    Route::get('sys-web-log', 'AppController@utilSysaxiomWebLog');
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
#Gmail
    Route::get('gmail', 'HomeController@gmail');
#Reminder
    Route::post('remind', 'Controller@remind');
    Route::post('getNotification', 'Controller@getNotification');
    Route::get('viewreminder', 'HomeController@viewreminder');
#Status
    Route::post('status', 'Controller@status');
    Route::post('getStatus', 'Controller@getStatus');
#Migrate
    Route::get('migrate', 'HomeController@migrate');
######Logout#####
    Route::get('logout', 'HomeController@logout');

//#New Web Services to be implemented ::
//Route::post('appLogin', 'AppController@Login');
//Route::post('getDashboardData', 'AppController@getDashboardData');
//Route::get('sendPush', 'PublicController@sendPush');
//Route::get('sendPushMsg', 'AppController@sendPush');
#Under Middleware
});
#Start of SA Site works

#For Native Mobile App - Temporary service
Route::post('updateStatus', 'Controller@updateStatus');

#Bot Works

Route::get('chat', 'ChatController@index');

#Temporary Service
Route::get('/test/{string}', 'Controller@test');
Route::get('webhook', 'Controller@webhook');

//GloExceptions


Route::get("/mail", function() {
    return View::make("admin.mail.mail");
});

#Cron Job
Route::get('cron', 'CronController@cron');
#End of Cron Job

#Default Auth Route
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

#End of Routes
