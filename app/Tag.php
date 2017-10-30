<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable = ['title', 'content','status', 'count'];

    public static $createTag = array(
        'title' => 'required|unique:tag',
        'content' => 'required',
        'status' => 'required'
    );

    public static $updateTag = array(
        'title' => 'required',
        'content' => 'required',
        'status' => 'required'
    );
}
