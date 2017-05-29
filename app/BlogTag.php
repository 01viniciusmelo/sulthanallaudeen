<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $table = 'blog_tag';

    public function getBlogs() {
        return $this->belongsToMany('App\Blog', 'blog_tag', 'tag_id', 'user_id')->select(array('blog.id', 'blog.blog_title', 'blog.blog_url'));
    }
    public $timestamps = true;
    protected $fillable = ['blog_id', 'tag_id', 'user_id'];
}
