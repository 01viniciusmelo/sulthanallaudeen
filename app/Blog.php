<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function getBlogs() {
        return $this->belongsToMany('App\Blog', 'blog_tag', 'tag_id', 'blog_id')->select(array('blog.id', 'blog.blog_title', 'blog.blog_url', 'blog.created_at'));
    }

    protected $fillable = ['blog_title', 'blog_url', 'blog_content', 'blog_author', 'blog_date', 'blog_status'];

    protected $hidden = ['password', 'remember_token'];


    public static $postBlog = array(
        'blog_title' => 'required|unique:blog',
        'blog_url' => 'required',
        'blog_content' => 'required',
    );

    
    public static $updateBlog = array(
        'blog_title' => 'required',
        'blog_url' => 'required',
        'blog_content' => 'required',
    );
}
