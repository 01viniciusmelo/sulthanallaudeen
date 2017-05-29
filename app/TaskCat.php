<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCat extends Model
{
    protected $table = 'task_cat';
    public function getBlogs() {
        return $this->belongsToMany('App\Task', 'task_cat', 'cat_id', 'user_id')->select(array('task.id', 'task.tag_title', 'task.tag_content'));
    }
    public $timestamps = true;
    protected $fillable = ['task_id', 'cat_id', 'user_id'];
}
