<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMails extends Model  {

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contactmail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_email', 'user_message', 'message_status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    public static $mailData = array(
        'user_email' => 'required|email',
        'user_message' => 'required',
    );

}
