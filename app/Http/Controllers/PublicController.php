<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#Services
use Auth;
use Hash;
use Input;
use Validator;
#Models
use App\Blog;
use App\Tag;
use App\BlogTag;


class PublicController extends Controller
{
    public function index() {
        return view('public.index');
    }

    public function blog() {
        $posts = Blog::where('blog_status', 1)->orderBy('id', 'desc')->paginate(10);
        $tags = $tags = Tag::where('tag_status', 1)->get();
        return view('public.blogs')->with('posts', $posts)->with('tags', $tags);
    }

    public function blogData($url) {
        $blogData = Blog::where('blog_url', $url)->first();
        $tags = $tags = Tag::where('tag_status', 1)->get();
        return view('public.blog')->with('blog', $blogData)->with('tags', $tags);
    }
}