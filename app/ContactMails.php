<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMails extends Model
{
    protected $table = 'contactmail';

    protected $fillable = ['user_email', 'user_message', 'message_status'];

    protected $hidden = ['password', 'remember_token'];
    public static $mailData = array(
        'user_email' => 'required|email',
        'user_message' => 'required',
    );
}
