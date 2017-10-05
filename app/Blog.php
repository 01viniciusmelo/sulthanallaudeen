<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = ['title', 'url', 'content', 'date', 'status'];

    public static $createBlog = array(
        'title' => 'required|unique:blog',
        'url' => 'required',
        'content' => 'required',
        'date' => 'required',
        'status' => 'required'
    );
}
