<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminder';

    protected $fillable = ['title', 'message', 'type','status', 'date'];

    public static $createReminder = array(
        'title' => 'required|unique:reminder',
        'message' => 'required',
        'type' => 'required',
        'status' => 'required'
    );

    public static $updateReminder = array(
        'title' => 'required',
        'message' => 'required',
        'type' => 'required',
        'status' => 'required'
    );
}
