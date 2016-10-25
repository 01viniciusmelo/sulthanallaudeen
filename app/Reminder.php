<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminder';
    protected $fillable = ['reminder_name','reminder_type','reminder_date', 'reminder_time', 'reminder_note', 'reminder_phone', 'status'];
}