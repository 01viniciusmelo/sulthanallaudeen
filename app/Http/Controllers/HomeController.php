<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use DB;
use URL;
use Hash;
use Mail;
use App\User;
use Input;
use App\Blog;
use App\Bot;
use App\ContactMails;
use App\Tag;
use App\Cat;
use App\AdminConfig;
use App\Task;
use App\TaskCat;
use App\BlogTag;
use App\Status;
use App\UserLog;
use Validator;
use Session;
use Redirect;

class HomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Home Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        return view('home');
    }

    #Admin Dashboard Page

    public function adminDashboard() {
        $blogCount = Blog::all()->count();
        $tagCount = Tag::all()->count();
        $contactCount = ContactMails::where('message_status', 0)->count();
        $totalCount = ContactMails::all()->count();
        $totalHit = UserLog::where('user_id', 1)->count();
        return view('admin.dashBoard')->with('blogCount', $blogCount)->with('blogCount', $blogCount)->with('tagCount', $tagCount)->with('contactCount', $contactCount)->with('totalCount', $totalCount)->with('totalHit', $totalHit);
    }

    #List Blogs

    public function listBlog() {
        $blogs = Blog::get(['id', 'blog_title', 'blog_date', 'blog_url']);
        return view('admin.blog.listBlog')->with('blogs', $blogs);
    }

    #Write Blog

    public function writeBlog() {
        $tags = Tag::where('tag_status', 1)->get();
        return view('admin.blog.writeBlog')->with('tags', $tags);
    }

    #Post Blog

    public function postBlog() {
        $blogData = Input::except('blogTags');
        $blogData['blog_author'] = 1;
        if ($blogData['blog_date'] == '') {
            $blogData['blog_date'] = date('Y-m-d H:i:s');
        }
        $validation = Validator::make($blogData, Blog::$postBlog);
        if ($validation->passes()) {
            $postBlog = Blog::create($blogData);
            $blogTags = Input::get('blogTags');
            foreach ($blogTags as $blogTagsData) {
                BlogTag::create([
                    'blog_id' => $postBlog->id,
                    'user_id' => '1',
                    'tag_id' => $blogTagsData
                ]);
            }

            $Response = array('success' => '1', 'blogId' => $postBlog->id);
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #Edit Blog

    public function editBlog($id) {
        $blogData = Blog::where('id', $id)->first();
        $allTags = Tag::where('tag_status', 1)->get();
        $blogTags = BlogTag::where('blog_id', $id)->get();
        return view('admin.blog.editBlog')->with('blogData', $blogData)->with('allTags', $allTags)->with('blogTag', $blogTags);
    }

    #Update Blog

    public function updateBlog() {
        $blogData = Input::except('blogTags', '_token');
        if ($blogData['blog_date'] == '') {
            unset($blogData['blog_date']);
        }
        $validation = Validator::make($blogData, Blog::$updateBlog);
        if ($validation->passes()) {
            $blog = BlogTag::where('blog_id', Input::get('id'))->delete();
            $blog = Blog::where('id', Input::get('id'))->update($blogData);
            $blogTags = Input::get('blogTags');
            foreach ($blogTags as $blogTagsData) {
                BlogTag::create([
                    'blog_id' => Input::get('id'),
                    'user_id' => '1',
                    'tag_id' => $blogTagsData
                ]);
            }

            $Response = array('success' => '1', 'blogId' => Input::get('id'));
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #List Tag

    public function listTag() {
        $tags = Tag::all();
        return view('admin.tag.listTag')->with('tags', $tags);
    }

    #Write Tag

    public function writeTag() {
        return view('admin.tag.writeTag');
    }

    #Edit Tag

    public function editTag($id) {
        $tagData = Tag::where('id', $id)->first();
        return view('admin.tag.editTag')->with('tagData', $tagData);
    }

    #Write Tag

    public function postTag() {

        $tagData = Input::except('_token');
        $validation = Validator::make($tagData, Tag::$postTag);
        if ($validation->passes()) {
            $postTag = Tag::create($tagData);
            $Response = array('success' => '1', 'tagId' => $postTag->id);
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #Edit Tag

    public function updateTag() {
        $tagData = Input::except('_token');
        $validation = Validator::make($tagData, Tag::$postTag);
        if ($validation->passes()) {
            $postTag = Tag::where('id', Input::get('id'))->update($tagData);
            $Response = array('success' => '1', 'tagId' => Input::get('id'));
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #Create Cat

    public function createCat() {
        return view('admin.cat.createCat');
    }

    #Post Cat

    public function postCat() {

        $catData = Input::except('_token');
        $validation = Validator::make($catData, Cat::$postCat);
        if ($validation->passes()) {
            $postCat = Cat::create($catData);
            $Response = array('success' => '1', 'catId' => $postCat->id);
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #List Cat

    public function listCat() {
        $cats = Cat::all();
        return view('admin.cat.listCat')->with('cats', $cats);
    }

    #Edit Cat

    public function editCat($id) {
        $catData = Cat::where('id', $id)->first();
        return view('admin.cat.editCat')->with('catData', $catData);
    }

    #Update Cat

    public function updateCat() {

        $catData = Input::except('_token');
        $validation = Validator::make($catData, Cat::$postCat);
        if ($validation->passes()) {
            Cat::where('id', Input::get('id'))->update($catData);
            $Response = array('success' => '1', 'catId' => Input::get('id'));
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #Create Task

    public function createTask() {
        $cats = Cat::where('catStatus', 1)->get();
        return view('admin.task.createTask')->with('cats', $cats);
    }

    #Post Task

    public function postTask() {

        $taskData = Input::except('_token');
        $taskData['taskAuthor'] = 1;
        $taskCats = Input::get('catTags');
        $validation = Validator::make($taskData, Task::$postTask);
        if ($validation->passes()) {
            $postTask = Task::create($taskData);
            foreach ($taskCats as $taskCatData) {
                TaskCat::create([
                    'task_id' => $postTask->id,
                    'user_id' => '1',
                    'cat_id' => $taskCatData[0]
                ]);
            }
            $Response = array('success' => '1', 'taskId' => $postTask->id);
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    public function listTask() {
        $tasks = Task::all();
        return view('admin.task.listTask')->with('tasks', $tasks);
    }

    public function editTask($id) {
        $taskData = Task::where('id', $id)->first();
        return view('admin.task.editTask')->with('taskData', $taskData);
    }

    #Messages

    public function listMessages() {
        $mails = ContactMails::all();
        return view('admin.messages.allmessages')->with('mails', $mails);
    }

    public function getMessage() {
        $mailData = ContactMails::where('id', Input::get('id'))->first();
        if ($mailData != '') {
            $Response = array('success' => '1', 'mailData' => $mailData);
        } else {
            $Response = array('success' => '0', 'message' => 'Mail Not Found');
        }
        return $Response;
    }

    public function messageMarkAsRead() {
        $contactMail = ContactMails::where('id', Input::get('id'))->first();
        if ($contactMail['message_status'] == 0) {
            $status['message_status'] = 1;
            ContactMails::where('id', Input::get('id'))->update($status);
        } else {
            $status['message_status'] = 0;
            ContactMails::where('id', Input::get('id'))->update($status);
        }
        $Response = array('success' => 1, 'status' => $status['message_status']);
        return $Response;
    }

    public function notificationAreaMessageList() {
        $unReadMessages = ContactMails::where('message_status', 1)->limit(3)->get();
        $Response = array('success' => '1', 'message' => $unReadMessages, 'count' => count($unReadMessages));
        return $Response;
    }

    public function getMessageCount() {
        $messageCount = ContactMails::all()->where('message_status', 0)->count();
        $Response = array('success' => '1', 'messageCount' => $messageCount);
        return $Response;
    }

    #Profile Settings

    public function profileSettings() {
        return view('admin.settings.profile');
    }

    #Profile Settings Data

    public function adminProfileSettingsData() {
        $adminData = User::where('id', Auth::user()->id)->first();
        $Response = array('success' => '1', 'adminData' => $adminData);
        return $Response;
    }

    #Updates Admin User Name

    public function updateAdminUserName() {
        $adminUserName = Input::except('_token');
        $validation = Validator::make($adminUserName, User::$adminUserName);
        if ($validation->passes()) {
            User::where('id', Input::get('id'))->update($adminUserName);
            $Response = array('success' => '1');
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #Updates Admin Email

    public function updateAdminEmail() {
        $adminEmail = Input::except('_token');
        $validation = Validator::make($adminEmail, User::$adminEmail);
        if ($validation->passes()) {
            User::where('id', Input::get('id'))->update($adminEmail);
            $Response = array('success' => '1');
        } else {
            $Response = array('success' => '0', 'err' => $validation->messages());
        }
        return $Response;
    }

    #Updates Admin Email

    public function updateAdminPassword() {
        $oldPassword = Input::get('oldPassword');
        $newPassword['password'] = Input::get('password');
        $validation = Validator::make($newPassword, User::$adminPassword);
        $adminPassword = User::where('id', Input::get('id'))->pluck('password');

        if (Hash::check($oldPassword, $adminPassword[0])) {
            if ($validation->passes()) {
                $newPassword['password'] = Hash::make($newPassword['password']);
                User::where('id', Input::get('id'))->update($newPassword);
                $Response = array('success' => '1');
            } else {
                ;
                $Response = array('success' => '0', 'err' => $validation->messages());
            }
        } else {
            $Response = array('success' => '0', 'err' => 'Old Password is Incorrect');
        }

        return $Response;
    }

    #Config Contact

    public function configContact() {
        return view('admin.config.contact');
    }

    #Update Admin Contact Data

    public function updateAdminContactData() {
        $configData[Input::get('updateKey')] = Input::get('updateElement');
        AdminConfig::where('id', 1)->update($configData);
        $Response = array('success' => '1', 'key' => Input::get('updateKey'));
        return $Response;
    }

    #Gmail

    public function viewreminder() {
        return view('admin.reminder.reminder')->with('reminderData', $this->getReminder());
    }

    #Gmail

    public function gmail() {
        return view('admin.mail.gmail');
    }

    #AI Setup

    public function botBuild()
    {
        $botData = Bot::where('id', 1)->first();
        return view('admin.bot.build')->with('botData', $botData);
    }
    public function botSetup(){
      return view('admin.bot.setup');
    }


    #Logout

    public function logout() {
        Session::flush();
        return Redirect::to('sa');
    }

}
