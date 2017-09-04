<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mail';

    protected $fillable = ['email', 'message', 'read','status'];

    public static $mailData = array(
        'email' => 'required|email',
        'message' => 'required',
    );
}
