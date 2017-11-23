<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'config';

    protected $fillable = ['name', 'desc', 'status'];

    public static $createConfig = array(
        'name' => 'required|unique:config',
        'desc' => 'required',
        'status' => 'required'
    );

    public static $updateConfig = array(
        'name' => 'required',
        'desc' => 'required',
        'status' => 'required'
    );

}
