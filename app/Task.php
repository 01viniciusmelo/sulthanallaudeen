<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Task extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'task';

    public function getBlogs() {
        return $this->belongsToMany('App\Task', 'task_cat', 'task_id', 'cat_id')->select(array('task.id', 'task.tag_title', 'task.Content', 'task.created_at'));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tag_title', 'tag_content', 'tag_status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    public static $postTask = array(
        'tag_title' => 'required|unique:task',
        'tag_content' => 'required',
    );
    public static $updateTask = array(
        'tag_title' => 'required',
        'tag_content' => 'required',
    );

}
