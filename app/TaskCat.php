<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class TaskCat extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'task_cat';

    ### Join

    public function getBlogs() {
        return $this->belongsToMany('App\Task', 'task_cat', 'cat_id', 'user_id')->select(array('task.id', 'task.tag_title', 'task.tag_content'));
    }

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['task_id', 'cat_id', 'user_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

}
