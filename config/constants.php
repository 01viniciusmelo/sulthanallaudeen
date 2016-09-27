<?php

return [
    
    'success' => [
        'LOGIN_SUCCESS' => 'Internal Server Error',
    ]
    ,
    'error' => [
        'INTERNAL_SERVER_ERROR' => 'Internal Server Error',
	    'ONLY_ADMIN' => 'Only Admin can Access',
	    'USER_NOT_EXIST' => 'User does not Exist',
	    'INVALID_PASSWORD' => 'Invalid Password',
        'BLOG_NOT_FOUND' => 'Blog Not Found',
        'TAG_NOT_FOUND' => 'Tag Not Found',
    ],
    'config' => [
        'URL' => 'http://www.sulthanallaudeen.com',
        'email' => 'sa@sulthanallaudeen.com',
        'dev_email' => 'sa@sulthanallaudeen.com'
    ],
    #Credentials
    #Sendgrid
    'sendgrid' => [
        'username' => 'xxxxxx',
        'password' => 'xxxxxx',
    ],
    #Google Console
    'google-mail' => [
        'clientid' => '701496422438-touj3h0gh86r1c8g6mbfhceiogaq45qc.apps.googleusercontent.com',
        'apiKey' => 'AIzaSyAl6RP5ZrC5h0vvKz8fvYuOdS7w4Z-S5Xc',
    ],
    #Cron
    'cron' => [
        'success' => 'Cron Job Executed Succesfully',
    ]

];