<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
#Services
use Auth;
use Hash;
use Input;
use Validator;
use SendGrid;
#Models
use App\User;
use App\Blog;
use App\Tag;
use App\BlogTag;
use App\ContactMails;
use App\UserLog;
use App\AdminConfig;
#Config
use Config;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    #Global Functions

    public function getAppConfig() {
        $Response = array('success' => 1, 'domainUrl' => Config::get('constants.config.URL'));
        return $Response;
    }

    #Common Functions

    public function loginUser($email, $password) {
        $userData = User::where('email', $email)->first();
        if ($userData) {
            if (Hash::check($password, $userData['password'])) {
                $Response = array('success' => 1, 'userId' => $userData['id'], 'userName' => $userData['name']);
            } else {
                $Response = array('success' => 0, 'message' => Config::get('constants.error.INVALID_PASSWORD'));
            }
        } else {
            $Response = array('success' => 0, 'message' => Config::get('constants.error.USER_NOT_EXIST'));
        }
        return $Response;
    }

    #Get All Blog Posts

    public function getBlogs() {
        $Response = array('success' => 1, 'data' => $blogs = Blog::where('blogStatus', 1)->orderBy('id', 'desc')->paginate(10));
        return $Response;
    }

    #Get Particular Blog Post

    public function getBlog($id = NULL) {
        if ($id == '') {
            $blogData = Blog::where('blogUrl', Input::get('url'))->first();
            if ($blogData) {
                $Response = array('success' => 1, 'data' => $blogData);
            } else {
                $Response = array('success' => 0, 'data' => 'Blog not found');
            }
        } else {
            $Response = array('success' => '1', 'data' => Blog::where('blogUrl', $id)->first());
        }
        return $Response;
    }

    #Search Blog

    public function searchBlogByQuery($query) {
        $blogResult = Blog::where('blogTitle', 'LIKE', '%' . $query . '%')->get();
        if (count($blogResult) == 0) {
            $Response = array('success' => 0);
        } else {
            $Response = array('success' => 1, 'data' => $blogResult, 'count' => count($blogResult));
        }
        return $Response;
    }

    #Get Tag

    public function getTags() {
        $Response = array('success' => 1, 'data' => $tags = Tag::where('tagStatus', 1)->get());
        return $Response;
    }

    #Get Particular Tag

    public function getTag($tag) {
        $tagId = Tag::where('tagTitle', $tag)->pluck('id');
        $blogTag = BlogTag::where('tag_id', $tagId)->pluck('id');
        if ($blogTag == '') {
            return 1;
        } else {
            $tagData = Blog::find($tagId)->getBlogs;
            return $tagData;
        }
    }

    #Config Contact Data

    public function AdminContactData() {
        $adminData = AdminConfig::where('id', 1)->first();
        $Response = array('success' => '1', 'adminData' => $adminData);
        return $Response;
    }

    #Feeds

    public function getTotalCount() {
        $blogCount = Blog::all()->count();
        $tagCount = Tag::all()->count();
        $contactCount = ContactMails::where('messageStatus', 0)->count();
        $totalCount = ContactMails::all()->count();
        $totalHit = UserLog::all()->count();
        $Response = array('success' => '1', 'blogCount' => $blogCount, 'tagCount' => $tagCount, 'contactCount' => $contactCount, 'totalHit' => $totalHit);
        return $Response;
    }

    #Access Info

    public function getDetails() {
        $userDetails['platform'] = $this->getPlatform();
        $userDetails['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $userDetails['date_time'] = date('Y-m-d H:i:s');
        $browserDetails = $this->getBrowser();
        $userDetails['browserName'] = $browserDetails['browser'];
        $userDetails['browserVersion'] = $browserDetails['version'];
        $Response = array('success' => 1, 'userDetails' => $userDetails);
        return $Response;
    }

    #Cron Jobs

    public function sendPushNotification($DeviceId, $Message) {
        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $DeviceId,
            'data' => $Message
        );
        $headers = array(
            'Authorization: key = AIzaSyDTL6-ORUx5arAi1M9el1VzZ7pefr9Ji9U',
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }

    public function triggerMail($email, $message) {

        $mailData['userEmail'] = $email;
        $mailData['userMessage'] = $message;
        $validation = Validator::make($mailData, ContactMails::$mailData);
        if ($validation->passes()) {
            $sendgrid = new SendGrid('testmyblood', 'Open@123');
            $mail = new SendGrid\Email();
            $emails = array($email);
            $mail->addTo('sa@sulthanallaudeen.com')
                    ->setFrom('allau@sulthanallaudeen.com')
                    ->setSubject('Sysaxiom :: Message from : ' . $email)
                    ->setHtml($message);
            //$sendgrid->send($mail);
            $mailId = ContactMails::create($mailData);
            $Response = array('success' => '1', 'mailId' => $mailId->id);
        } else {
            $Response = array('success' => '0', 'error' => $validation->messages());
        }
        return $Response;
    }

    #Other Functions

    public function getPlatform() {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $os_platform = "Unknown OS Platform";
        $os_array = array(
            '/windows nt 10/i' => 'Windows 10',
            '/windows nt 6.3/i' => 'Windows 8.1',
            '/windows nt 6.2/i' => 'Windows 8',
            '/windows nt 6.1/i' => 'Windows 7',
            '/windows nt 6.0/i' => 'Windows Vista',
            '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
            '/windows nt 5.1/i' => 'Windows XP',
            '/windows xp/i' => 'Windows XP',
            '/windows nt 5.0/i' => 'Windows 2000',
            '/windows me/i' => 'Windows ME',
            '/win98/i' => 'Windows 98',
            '/win95/i' => 'Windows 95',
            '/win16/i' => 'Windows 3.11',
            '/macintosh|mac os x/i' => 'Mac OS X',
            '/mac_powerpc/i' => 'Mac OS 9',
            '/linux/i' => 'Linux',
            '/ubuntu/i' => 'Ubuntu',
            '/iphone/i' => 'iPhone',
            '/ipod/i' => 'iPod',
            '/ipad/i' => 'iPad',
            '/android/i' => 'Android',
            '/blackberry/i' => 'BlackBerry',
            '/webos/i' => 'Mobile'
        );
        foreach ($os_array as $regex => $value) {

            if (preg_match($regex, $user_agent)) {
                $os_platform = $value;
            }
        }
        return $os_platform;
    }

    #Get Browser Information

    public function getBrowser() {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
                ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            
        }
        $i = count($matches['browser']);
        if ($i != 1) {
            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = $matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }
        if ($version == null || $version == "") {
            $version = "?";
        }
        $Response = array('browser' => $bname, 'version' => $version);
        return $Response;
    }

}
