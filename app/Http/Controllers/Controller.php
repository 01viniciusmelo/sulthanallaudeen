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
use App\Reminder;
use App\CronEntry;
use App\Cat;
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
        if (Input::get('url')) {
            $Response = $this->getBlog(Input::get('url'));
        } else {
            $Response = array('success' => 1, 'data' => $blogs = Blog::where('blog_status', 1)->orderBy('id', 'desc')->paginate(10));
        }
        return $Response;
    }

    public function utilSysaxiomWebLog() {
        $sideBar = $this->technologySideBar();
        $userLog = $this->logUser();
        return view('admin.util.sysWebLog')->with('sideBar', $sideBar)->with('userLog', $userLog['logs']);
    }

    #Need to clean this

    public function technologySideBar() {

        $fullUrl = $_SERVER['REQUEST_URI'];
        $urlSegment = substr($fullUrl, strrpos($fullUrl, '/') + 1);
        $url = array("accessLogServer" => "", "technology" => "");
        if ($urlSegment == 'technology') {
            $url['technology'] = 'active';
        } else if ($urlSegment == 'server') {
            $url['accessLogServer'] = 'active';
        } else {
            $url['technology'] = 'active';
        }


        return '<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
            <a href=' . asset('/technology') . ' class="list-group-item ' . $url['technology'] . '">Home</a>
            <a href="' . asset('/accessLog/server') . '" class="list-group-item ' . $url['accessLogServer'] . '">Website Log</a>
          </div>
        </div><!--/.sidebar-offcanvas-->';
    }

    #Reminder

    public function remind() {
        $reminderData = Input::all();
        $reminderData['reminder_time'] = date("H:i:s", strtotime($reminderData['reminder_date']));
        $reminderData['reminder_date'] = date("Y-m-d", strtotime($reminderData['reminder_date']));
        $reminderData['status'] = 1;
        Reminder::create($reminderData);
        $reminderData = Reminder::orderBy('id', 'DESC')->take(10)->get();
        $Response = array('success' => '1', 'reminder' => $reminderData);
        return $Response;
    }

    public function getNotification()
    {
        $reminderData = Reminder::orderBy('id', 'DESC')->take(10)->get();
        $Response = array('success' => '1', 'reminder' => $reminderData);
        return $Response;
    }

    #Get Particular Blog Post

    public function getBlog($id = NULL) {
        if ($id == '') {
            $blogData = Blog::where('blog_url', Input::get('url'))->first();
            if ($blogData) {
                $Response = array('success' => 1, 'data' => $blogData);
            } else {
                $Response = array('success' => 0, 'data' => 'Blog not found');
            }
        } else {
            $Response = array('success' => '1', 'data' => Blog::where('blog_url', $id)->first());
        }
        return $Response;
    }

    #Search Blog

    public function searchBlogByQuery($query) {
        $blogResult = Blog::where('blog_title', 'LIKE', '%' . $query . '%')->get();
        if (count($blogResult) == 0) {
            $Response = array('success' => 0);
        } else {
            $Response = array('success' => 1, 'data' => $blogResult, 'count' => count($blogResult));
        }
        return $Response;
    }

    #Get Tag

    public function getTags() {
        $Response = array('success' => 1, 'data' => $tags = Tag::where('tag_status', 1)->get());
        return $Response;
    }

    #Get Particular Tag

    public function getTag($tag = NULL) {
        if (Input::get('tag')) {
            $tag = Input::get('tag');
        }
        if (Input::get('tag') && Input::get('about')) {
            $tagData = Tag::where('tag_title', $tag)->first();
            if ($tagData) {
                $Response = array('success' => 1, 'data' => $tagData);
            } else {
                $Response = array('success' => 0, 'data' => Config::get('constants.error.TAG_NOT_FOUND'));
            }
            return $Response;
        }
        $tagId = Tag::where('tag_title', $tag)->pluck('id');
        $blogTag = BlogTag::where('tag_id', $tagId)->pluck('id');
        if ($blogTag == '') {
            return 1;
        } else {
            $tagData = Blog::find($tagId)->getBlogs;
            return $tagData;
        }
    }

    #Get Category Data

    public function getTagData($tag = NULL)
    {
        $tagData = Tag::where('tag_title', $tag)->first();
        return $tagData;
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
        $contactCount = ContactMails::where('message_status', 0)->count();
        $totalCount = ContactMails::all()->count();
        $totalHit = UserLog::all()->count();
        $Response = array('success' => '1', 'blog_count' => $blogCount, 'tag_count' => $tagCount, 'contact_count' => $contactCount, 'total_hit' => $totalHit);
        return $Response;
    }

    #Access Info

    public function getDetails() {
        $userDetails['platform'] = $this->getPlatform();
        $userDetails['ip'] = $_SERVER['REMOTE_ADDR'];
        $browserDetails = $this->getBrowser();
        $userDetails['browser'] = $browserDetails['browser'];
        $userDetails['version'] = $browserDetails['version'];
        $userDetails['datetime'] = date("Y-m-d H:i:s");
        $Response = array('success' => 1, 'systemDetails' => $userDetails);
        return $Response;
    }

    #Log User

    public function logUser($id = NULL) {
        if($id == "")
        {
            $Response = array('success' => 1, 'logs' => UserLog::orderBy('id', 'desc')->get());
            return $Response;
        }
        $systemDetails = $this->getDetails();
        $logData = $systemDetails['systemDetails'];
        $logData['user_id'] = $id;
        $mailId = UserLog::create($logData);
        $Response = array('success' => 1, 'message' => 'User information logged succesfully');
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

        $mailData['user_email'] = $email;
        $mailData['user_message'] = $message;
        $mailData['message_status'] = 1;
        $validation = Validator::make($mailData, ContactMails::$mailData);
        if ($validation->passes()) {
            $sendgrid = new SendGrid('testmyblood', 'Open@123');
            $mail = new SendGrid\Email();
            $emails = array($email);
            $mail->addTo(Config::get('constants.config.email'))
                    ->setFrom(Config::get('constants.config.email'))
                    ->setSubject('Sysaxiom :: Message from : ' . $email)
                    ->setHtml($message);
            $sendgrid->send($mail);
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

    #Cron Job

    public function cron() {
        echo 'Cron Job Started at ' . date("Y-m-d H:i:s") . '<br>';
        #Calling Sub Cron
        echo nl2br("...\n");
        $this->subCron();
        echo nl2br("\n...\n");
        echo 'Cron Job Finished at ' . date("Y-m-d H:i:s");
    }

    #Sub Cron

    public function subCron() {

        #Initiating Sub Cron
        #Considering only Reminder for now
        $reminderList = Reminder::where('status', 1)->get();

        #Reminder Type 1 denotes Daily Reminder and 2 denotes Only one time
        foreach ($reminderList as $reminder) {
            if ($reminder['reminder_type'] == 1) {
                #It is a Daily Reminder
                $this->Reminder('Daily', $reminder);
            } else {
                #It is a One time Reminder
                $this->Reminder('Once', $reminder);
            }
        }
        #Finishing Sub Cron
    }

    #End of Sub Cron

    public function Reminder($type, $reminder) {

        if ($type == "Once" && $reminder['status'] == 1 && date("Y-m-d H:i") == $reminder['reminder_date'] . ' ' . date("H:i", strtotime($reminder['reminder_time']))) {
            #Remind Once
            $this->doCronEntry($reminder['id']);
            Reminder::where('id', $reminder['id'])->update(array('status' => 2));
        } else {
            #Remind Daily
            if (date("Y-m-d") != date("Y-m-d", strtotime($reminder['updated_at'])) && date("H:i") == date("H:i", strtotime($reminder['reminder_time']))) {
                $this->doCronEntry($reminder['id']);
                Reminder::find($reminder['id'])->touch();
            }
        }
    }

    public function doCronEntry($id) {
        echo 'Executed Process Id ' . $id . '<br>';
        $cronData['process_id'] = $id;
        $cronData['cron_time'] = date("Y-m-d H:i:s");
        $cronData['cron_note'] = Config::get('constants.cron.success');
        $cronData['status'] = 1;
        CronEntry::create($cronData);
    }

    public function doPush() {
        
    }

    #End of Cron Job
}
