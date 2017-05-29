<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CronEntry extends Model
{
    protected $table = 'cron_entry';
    protected $fillable = ['process_id', 'type', 'cron_date', 'cron_time', 'cron_note', 'status'];
}
