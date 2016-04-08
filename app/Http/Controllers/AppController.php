<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Redirect;
use Mail;
use Input;
use Validator;

class AppController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

#Start of Views
    #Index    

    public function index() {
        return view('public.index');
    }

    #Blog Full Listing

    public function blog() {
        return view('public.bloghome')->with('posts', $this->getBlogs()['data'])->with('tags', $this->getTags()['data']);
    }

    #Blog Individual Page

    public function blogData($url) {
        return view('public.blog')->with('data', $this->getBlog($url)['data'])->with('tags', $this->getTags()['data']);
    }

    #Search Blog

    public function searchBlog() {
        $blogResult = $this->searchBlogByQuery(Input::get('searchQuery'));
        return $blogResult;
        $blogResult = Blog::where('blogTitle', 'LIKE', '%' . $searchQuery . '%')->get();
        if (count($blogResult) == 0) {
            $resultData = '<div class="alert alert-danger" role="alert"><strong>Searching for the Posts contains the word "' . $searchQuery . '" ( ' . count($blogResult) . ' Results )</div>';
        } else {
            $resultData = '<div class="alert alert-success" role="alert"><strong>Searching for the Posts contains the word "' . $searchQuery . '" ( ' . count($blogResult) . ' Result )</div>';
        }

        foreach ($blogResult as $key) {
            $resultData .= '<h2><a href="' . asset("/") . 'blog/' . $key["blogUrl"] . '" style="text-decoration:none">' . $key["blogTitle"] . '</a></h2>
				<p class="lead">by <a style="text-decoration:none">Sulthan Allaudeen</a></p>
				<p style="float:right"><span class="glyphicon glyphicon-time"></span> Posted on 01 Sep 2015 </p>';
        }
        return $resultData;
    }

    #Get CSRF Token

    public function getToken() {
        $token = csrf_token();
        $Response = array('success' => '1', '_token' => $token);
        return $Response;
    }

#End of Views
    #Do Login

    public function doLogin() {
        return $this->loginUser(Input::get('email'), Input::get('password'));
    }

    #Send Push Notification

    public function sendPush() {
        $allUser = User::all();
        foreach ($allUser as $user) {
            $PushMessage = '{"title" : "Title of Push", "message" : "Push Message"}';
            $DeviceId = array($user->gcm_id);
            $Message = array("content" => urldecode($PushMessage));
            $this->sendPushNotification($DeviceId, $Message);
        }
    }

    #Get Feeds

    public function getAllCount() {
        return $this->getTotalCount();
    }

    #Get Platform

    public function getPlatform() {
        return $this->getPlatform();
    }

}
