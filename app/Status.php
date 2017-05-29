<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable = ['status_note', 'status_status'];
    public static $addStatus = array(
        'status_note' => 'required',
        'status_status' => 'required',
    );
}
