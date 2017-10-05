<?php

namespace App\Http\Controllers;

#Util
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
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
        return view('admin.dashboard.index');
    }

    public function blog(){
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blog.list')->with('blogs', $blogs);
    }

    public function blogCreate(){
        $tags = Tag::where('status', 1)->orderBy('id', 'asc')->get();
        return view('admin.blog.create')->with('tags', $tags);
    }

    public function blogCreateData(){
        $blogData = Input::except('_token');
        //return $blogData;
        $validation = Validator::make($blogData, Blog::$createBlog);
        if ($validation->passes()) {
            //Check if tags are present
            $postBlog = Blog::create($blogData);
            $blogTags = Input::get('blogTags');
            foreach ($blogData['tags'] as $tags) {
                BlogTag::create(['blog_id' => $postBlog->id,'user_id' => '1','tag_id' => $tags]);
            }
            return redirect()->route('blog')->with('success', 'Blog created Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
    }

    public function tag(){
        $tags = Tag::orderBy('id', 'desc')->get();
        return view('admin.tag.list')->with('tags', $tags);
    }
}
