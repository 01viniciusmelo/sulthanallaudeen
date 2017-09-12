<?php

namespace App\Http\Controllers;

#Util
use Illuminate\Http\Request;
#Models
use App\Blog;
use App\BlogTag;
use App\Mail;
use App\MailTemplate;
use App\Tag;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function blog(){
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.blog')->with('blogs', $blogs);
    }

    public function tag(){
        $tags = Tag::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.tag')->with('tags', $tags);
    }
}
