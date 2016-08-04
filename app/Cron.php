<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cron extends Model
{
    protected $table = 'cron';
    protected $fillable = ['cron_name', 'cron_time', 'cron_note', 'status'];
}
