<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
#Util
use Auth;
use Config;
use Hash;
use Validator;
#Models
use App\Blog;
use App\BlogTag;
use App\Configuration;
use App\Mail;
use App\MailTemplate;
use App\Tag;
use App\User;
use Plivo\RestAPI;
use Google_Client;
use Google_Service_Drive;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('public.index');
    }

    public function blogs(){
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('public.blogs')->with('blogs', $blogs)->with('tags', $this->getTags());
    }

    public function blog($query){
        $blog = Blog::where('url', $query)->first();
        $tags = $this->getRelatedTags($blog->id);
        $tag = $this->getTags();
        return view('public.blog')->with('blog', $blog)->with('tags', $this->getTags())->with('tagged',$tags);
    }

    public function getRelatedTags($id){
        $blog_tags = BlogTag::where('blog_id',$id)->get();
        $tags = [];
        for ($i=0; $i < count($blog_tags) ; $i++) {
            $tag = Tag::where('id',$blog_tags[$i]->tag_id)->first();
            array_push($tags,$tag);
        }
        return $tags;
    }

    public function searchBlog() {
        $blogs = Blog::where('title', 'LIKE', '%' . Input::get('searchQuery') . '%')->where('status',1)->get();
        if (count($blogs) == 0) {
            $Response = array('success' => 0);
        } else {
            $Response = array('success' => 1, 'data' => $blogs, 'count' => count($blogs));
        }
        return $Response;
    }

    public function tag($query){
        $tag = Tag::where('title', $query)->first();
        $blog_tagged = BlogTag::where('tag_id', $tag->id)->get();
        $blogList = [];
        for ($i=0; $i < count($blog_tagged) ; $i++) {
            array_push($blogList,$blog_tagged[$i]->blog_id);
        }
        $blogs = Blog::whereIn('id',$blogList)->where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('public.tag')->with('blogs', $blogs)->with('tag', $tag)->with('tags', $this->getTags());
    }

    public function tagAbout($query){
        $tag = Tag::where('title', $query)->first();
        return view('public.tag-about')->with('tag', $tag)->with('tags', $this->getTags());
    }

    public function getTags(){
        return Tag::where('status', 1)->get();
    }

    public function contact(){
        return view('public.contact');
    }

    public function contactSA(){
        $mailData = Input::all();
        $mailData['read'] = 0;
        $validation = Validator::make($mailData, Mail::$mailData);
        if ($validation->passes()){
            $create = Mail::create($mailData);
            $server = Configuration::where('name','firebase-server-key')->first();
            $key = Configuration::where('name','android-device-token')->first();
            $this->sendFCM($server->desc,$key->desc,'Contact from '.$mailData['email'],$mailData['message']);
            $Response = array('success' => '1', 'id' => $create->id);
        }
        else{
            $Response = array('success' => '0', 'error' => $validation->messages());
        }
        return $Response;
    }

    #Admin Login Part
    public function login(){
        return view('admin.login.login');
    }

    public function doLogin(){
        $userData = Input::all();
        if (Auth::attempt(['email' => $userData['email'], 'password' => $userData['password']])) {
            return redirect()->intended('admin/dashboard');
        }
        else{
            return back()->withInput()->with('status', 'Invalid Username or Password');
        }

    }

    #Mobile Api for Authentication
    public function authUser(){
        $userData = Input::all();
        $userExist = User::where('email', $userData['email'])->first();
        if ($userData) {
            if (Hash::check($userData['password'], $userExist['password'])) {
                Auth::loginUsingId($userExist['id']);
                #Auth::loginUsingId(1, true); to Remember
                $token = csrf_token();
                $Response = array('success' => 1, 'userId' => $userExist['id'], 'userName' => $userExist['name'], '_token' => $token);
            } else {
                $Response = array('success' => 0, 'message' => Config::get('constants.error.INVALID_PASSWORD'));
            }
        } else {
            $Response = array('success' => 0, 'message' => Config::get('constants.error.USER_NOT_EXIST'));
        }
        return $Response;
    }

    #user logout
    public function logout(){
        Auth::logout();
        $Response = array('success' => '1', 'message' => 'User logout success');
        return $Response;
    }

    #getToken
    public function getToken(){
        $token = csrf_token();
        $Response = array('success' => '1', '_token' => $token);
        return $Response;
    }



    #Testing Function

    public function test(){
      return Hash::make('shifa');
    }

    public function pingTwitter(){
        return $this->sendTweet('Ping from sulthanallaudeen.com at .'.date('Y-m-d H:i:s'));
    }

    public function testGoogle(){
        $client = new Google_Client();
        $client->setApplicationName("Client_Library_Examples");
        $client->setDeveloperKey("YOUR_APP_KEY");

        $service = new Google_Service_Books($client);
        $optParams = array('filter' => 'free-ebooks');
        $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

        foreach ($results as $item) {
          echo $item['volumeInfo']['title'], "<br /> \n";
        }
    }

    public function testFCM(){

        // $client = new RestAPI('https://localhost/sulthanallaudeen', 'MANZA1OTU4ODVLYWFINW', 'ZDgwMGVmZjJjYzg2NTljOGJhZTE3M2E1ZDRlMTQ4', '1.0');
        // $call_params = array(
        //     'From' => '919191919191', # Caller Id
        //     'To' => '919042445010', # User Number to Call
        //     'Gateways' => "user/", # Gateway string to try dialing our separated by comma. First in list will be tried first
        //     'GatewayCodecs' => "'PCMA,PCMU'", # Codec string as needed by FS for each gateway separated by comma
        //     'GatewayTimeouts' => "60",      # Seconds to timeout in string for each gateway separated by comma
        //     'GatewayRetries' => "1", # Retry String for Gateways separated by comma, on how many times each gateway should be retried
        //     'AnswerUrl' => "http://127.0.0.1:5000/answered/",
        //     'HangupUrl' => "http://127.0.0.1:5000/hangup/",
        //     'RingUrl' => "http://127.0.0.1:5000/ringing/"
        // );
        // $response = $client->call($call_params);





        // $params = array(
        //     'src' => '917010609203', // Sender's phone number with country code
        //     'dst' => '919042445010', // Receiver's phone number with country code
        //     'text' => 'Super..', // Your SMS text message
        //     'method' => 'POST' // The method used to call the url
        // );
        // $p = new RestAPI('MANZA1OTU4ODVLYWFINW', 'ZDgwMGVmZjJjYzg2NTljOGJhZTE3M2E1ZDRlMTQ4');
        // $Response = $p->send_message($params);
        // return $Response;
        $server = Configuration::where('name','firebase-server-key')->first();
        $key = Configuration::where('name','android-device-token')->first();
        return $this->sendFCM($server->desc,$key->desc,'Sup !','FCM Working good ;)');
    }

    #Temporary Function

    public function updateFCMToken(){
        $data['name'] = Input::get('key');
        $data['desc'] = Input::get('value');
        Configuration::where('id', Input::get('id'))->update($data);
        $Response = array('success' => 1,'message' => 'Config Edited Succesfully !');
        return $Response;
    }

}
