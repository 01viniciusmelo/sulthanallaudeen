<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable = ['tag_title', 'tag_content', 'tag_date', 'tag_status'];

    public static $postTag = array(
        'tag_title' => 'required',
        'tag_content' => 'required',
    );
}
