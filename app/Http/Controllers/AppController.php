<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Redirect;
use Mail;
use Input;
use Validator;
use Auth;
use SendGrid;

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

    #Tag

    public function tagData($query) {
        return view('public.tag')->with('tagData', $this->getTag($query))->with('tagList', $this->getTags())->with('tags', $this->getTags()['data'])->with('tagName', $query);
    }

    #Tag About Page

    public function tagAbout($tag = NULL) {
        $tagData =  $this->getTagData($tag);
        $tags = $this->getTags($tag);
        return view('public.tagAbout')->with('tagData', $tagData)->with('tags', $tags['data']);
    }

    #Search Blog

    public function searchBlog() {
        $blogResult = $this->searchBlogByQuery(Input::get('searchQuery'));
        return $blogResult;
    }

    #Contact 

    public function contact() {
        return view('public.contact');
    }

    #End of Views
    #Other Services

    public function sendMail() {
        return $this->triggerMail(Input::get('user_email'), Input::get('user_message'));
    }

    #Get CSRF Token

    public function getToken() {
        $Response = array('success' => '1', '_token' =>csrf_token());
        return $Response;
    }

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

    // public function getPlatform() {
    //     return $this->getPlatform();
    // }


    #Admin Login Page

    public function adminLogin() {
        return view('admin.login.login');
    }

    #Admin Auth Login

    public function authAdminLogin() {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
            $this->recordLog(Auth::user()->id);
            return Redirect::to('dashboard');
        } else {
            #return Redirect::to('admin.login.login')->with('Message', 'Invalid Username or Password');   }
            return Redirect::to('sa')->with('warning', 'Invalid Username or Password');
        }
    }

    public function time()
    {
        return date("Y-m-d H:i:s");
    }    

}