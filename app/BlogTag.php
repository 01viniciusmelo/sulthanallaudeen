<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_tag';

    ### Join

    public function getBlogs() {
        #return $this->belongsToMany('App\Receipe', 'receipe_favorites', 'user_id', 'receipe_id')->select(array('receipe.id', 'receipe.ReceipeName', 'receipe.ReceipeImage'));
        return $this->belongsToMany('App\Blog', 'blog_tag', 'tag_id', 'user_id')->select(array('blog.id', 'blog.blog_title', 'blog.blog_url'));
    }

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['blog_id', 'tag_id', 'user_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

}
