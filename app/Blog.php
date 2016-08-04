<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Blog extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog';

    public function getBlogs() {
        return $this->belongsToMany('App\Blog', 'blog_tag', 'tag_id', 'blog_id')->select(array('blog.id', 'blog.blog_title', 'blog.blog_url', 'blog.created_at'));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['blog_title', 'blog_url', 'blog_content', 'blog_author', 'blog_date', 'blog_status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
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
