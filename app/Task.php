<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    public function getBlogs() {
        return $this->belongsToMany('App\Task', 'task_cat', 'task_id', 'cat_id')->select(array('task.id', 'task.tag_title', 'task.Content', 'task.created_at'));
    }
    protected $fillable = ['tag_title', 'tag_content', 'tag_status'];
    public static $postTask = array(
        'tag_title' => 'required|unique:task',
        'tag_content' => 'required',
    );
    public static $updateTask = array(
        'tag_title' => 'required',
        'tag_content' => 'required',
    );
}
