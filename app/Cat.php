<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cat';
    protected $fillable = ['cat_title', 'cat_content', 'cat_status'];
    public static $postCat = array(
        'cat_title' => 'required',
        'cat_content' => 'required',
    );
}
