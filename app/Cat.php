<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model {

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cat';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cat_title', 'cat_content', 'cat_status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public static $postCat = array(
        'cat_title' => 'required',
        'cat_content' => 'required',
    );

}
