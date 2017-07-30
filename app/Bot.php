<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bot extends Model
{
    protected $table = 'bot';

    protected $fillable = ['name', 'description', 'dob', 'status'];
}
