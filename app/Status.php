<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Status extends Model  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['status_note', 'status_status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public static $addStatus = array(
        'status_note' => 'required',
        'status_status' => 'required',
    );

}
