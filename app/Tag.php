<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tag';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tag_title', 'tag_content', 'tag_date', 'tag_status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public static $postTag = array(
        'tag_title' => 'required',
        'tag_content' => 'required',
    );

}
