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

    #Tag

    public function tagData($query) {
        return view('public.tag')->with('tagData', $tagData)->with('tagList', $tagData)->with('tags', $tags)->with('tagName', $tag);
        return $this->getTag($query);
        return view('public.tag')->with('tagData', $this->getTag($query))->with('tagName', $query);
        return view('public.tag')->with('tagData', $tagData)->with('tagList', $tagData)->with('tags', $tags)->with('tagName', $tag);
        #return view('public.tag')->with('error', $this->getTag($query)['data'])->with('tagName', $this->getTags()['data']);
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
    #Get CSRF Token

    public function getToken() {
        $token = csrf_token();
        $Response = array('success' => '1', '_token' => $token);
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

    public function getPlatform() {
        return $this->getPlatform();
    }

}
