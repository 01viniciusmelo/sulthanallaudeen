<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'config';

    protected $fillable = ['name', 'desc', 'status'];
}
