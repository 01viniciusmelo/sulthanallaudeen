<?php

namespace App\Http\Controllers;

#Util
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
#Models
use App\Blog;
use App\BlogTag;
use App\Configuration;
use App\Mail;
use App\Tag;
use App\User;
use App\Reminder;


class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
        return view('admin.dashboard.index');
    }

    //Start of Blog Section

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
        $validation = Validator::make($blogData, Blog::$createBlog);
        if ($validation->passes()) {
            //Check if tags are present
            $postBlog = Blog::create($blogData);
            $blogTags = Input::get('blogTags');
            foreach ($blogData['tags'] as $tags) {
                BlogTag::create(['blog_id' => $postBlog->id,'user_id' => 1,'tag_id' => $tags,'status' => 1]);
            }
            $this->SyncBlogCount();
            return redirect()->route('blog')->with('success', 'Blog created Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
    }

    public function blogEdit($id){
        $blog = Blog::where('id', $id)->first();
        $tags = Tag::where('status', 1)->orderBy('id', 'asc')->get();
        $tagged = BlogTag::where('blog_id', $id)->get();
        $tagId = [];
        for ($i=0; $i < count($tagged); $i++) { 
            array_push($tagId,$tagged[$i]->tag_id);
        }
        return view('admin.blog.edit')->with('tags', $tags)->with('blog', $blog)->with('tagId', $tagId);
    }

    public function blogUpdateData(){
        $blogData = Input::except('_token');
        $blogExist = Blog::where('id', $blogData['id'])->first();
        if($blogExist){
            $validation = Validator::make($blogData, Blog::$updateBlog);
        if ($validation->passes()) {
            $data['title'] = $blogData['title'];
            $data['url'] = $blogData['url'];
            $data['content'] = $blogData['content'];
            $data['date'] = $blogData['date'];
            $data['status'] = $blogData['status'];
            Blog::where('id', $blogData['id'])->update($data);
            $tagged = BlogTag::where('blog_id', $blogData['id'])->get();
            $oldTags = [];
            for ($i=0; $i <count($tagged) ; $i++) { 
                array_push($oldTags,$tagged[$i]->id);
            }
            BlogTag::destroy($oldTags);
            $blogTags = Input::get('blogTags');
            foreach ($blogData['tags'] as $tags) {
                BlogTag::create(['blog_id' => $blogData['id'],'user_id' => 1,'tag_id' => $tags,'status' => 1]);
            }
            $this->SyncBlogCount();
            return redirect()->route('blog')->with('success', 'Blog updated Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
        }else{
            return back()->withInput()->with('error', 'Invalid Blog Id');
        }
    }

    public function blogDelete($id){
        Blog::destroy($id);
        BlogTag::where('blog_id', $id)->delete();
        return redirect()->route('blog')->with('success', 'Blog deleted Success');
    }

    public function blogStatus($id,$status){
        if($status=='Active')
        {
            $data['status'] = 0;
            Blog::where('id', $id)->update($data);
            return redirect()->route('blog')->with('success', 'Blog Deactivated Success');
        }else if($status=='InActive'){
            $data['status'] = 1;
            Blog::where('id', $id)->update($data);
            return redirect()->route('blog')->with('success', 'Blog Activated Success');
        }else{
            return redirect()->route('blog')->with('error', 'Invalid Action');
        }
    }

    //End of Blog Section

    //Start of Tag Section

    public function tag(){
        $tags = Tag::orderBy('id', 'desc')->get();
        return view('admin.tag.list')->with('tags', $tags);
    }

    public function tagCreate(){
        return view('admin.tag.create');
    }

    public function tagCreateData(){
        $tagData = Input::except('_token');
        $validation = Validator::make($tagData, Tag::$createTag);
        if ($validation->passes()) {
            $tagData['count'] = 0;
            $postBlog = Tag::create($tagData);
            return redirect()->route('tag')->with('success', 'Tag created Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
    }

    public function tagEdit($id){
        $tag = Tag::where('id', $id)->first();
        return view('admin.tag.edit')->with('tag', $tag);
    }

    public function tagUpdateData(){
        $tagData = Input::except('_token');
        $tagExist = Tag::where('id', $tagData['id'])->first();
        if($tagExist){
            $validation = Validator::make($tagData, Tag::$updateTag);
        if ($validation->passes()) {
            $data['title'] = $tagData['title'];
            $data['content'] = $tagData['content'];
            $data['status'] = $tagData['status'];
            Tag::where('id', $tagData['id'])->update($data);
            return redirect()->route('tag')->with('success', 'Tag updated Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
        }else{
            return back()->withInput()->with('error', 'Invalid Tag Id');
        }
    }

    public function tagDelete($id){
        Tag::destroy($id);
        return redirect()->route('tag')->with('success', 'Tag deleted Success');
    }

    //End of Tag Section

    //Start of Contact Mail Function

    public function contacts(){
        $mails = Mail::all();
        return view('admin.contacts.index')->with('mails', $mails);
    }

    //End of Contact Mail Function

    //Start of Config Section

    public function config(){
        $configs = Configuration::orderBy('id', 'desc')->get();
        return view('admin.config.list')->with('configs', $configs);
    }

    public function configCreate(){
        return view('admin.config.create');
    }

    public function configCreateData(){
        $configData = Input::except('_token');
        //return $configData;
        $validation = Validator::make($configData, Configuration::$createConfig);
        if ($validation->passes()) {
            Configuration::create($configData);
            return redirect()->route('config')->with('success', 'Config created Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
    }

    public function configEdit($id){
        $config = Configuration::where('id', $id)->first();
        return view('admin.config.edit')->with('config', $config);
    }

    public function configUpdateData(){
        $configData = Input::except('_token');
        $configExist = Configuration::where('id', $configData['id'])->first();
        if($configExist){
            $validation = Validator::make($configData, Configuration::$updateConfig);
        if ($validation->passes()) {
            $data['name'] = $configData['name'];
            $data['desc'] = $configData['desc'];
            $data['status'] = $configData['status'];
            Configuration::where('id', $configData['id'])->update($data);
            return redirect()->route('config')->with('success', 'Configuration updated Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
        }else{
            return back()->withInput()->with('error', 'Invalid Config Id');
        }
    }

    public function configDelete($id){
        Configuration::destroy($id);
        return redirect()->route('config')->with('success', 'Config deleted Success');
    }

    public function configStatus($id,$status){
        if($status=='Active')
        {
            $data['status'] = 1;
            Configuration::where('id', $id)->update($data);
            return redirect()->route('config')->with('success', 'Configuration Activated Success');
        }else if($status=='InActive'){
            $data['status'] = 0;
            Configuration::where('id', $id)->update($data);
            return redirect()->route('config')->with('success', 'Config DeActivated Success');
        }else{
            return redirect()->route('config')->with('error', 'Invalid Action');
        }
    }

    //End of Config Section


    //Start of Reminder

    public function reminder(){
        $reminders = Reminder::orderBy('id', 'desc')->get();
        return view('admin.reminder.list')->with('reminders', $reminders);
    }

    public function reminderCreate(){
        return view('admin.reminder.create');
    }

    public function reminderCreateData(){
        $reminderData = Input::except('_token');
        if($reminderData['type']=='1'){
            $reminderData['date'] = Input::get('datetime');
        }else{
            $reminderData['date'] = Input::get('time');
        }
        unset($reminderData['datetime']);
        unset($reminderData['time']);
        //return $reminderData;
        $validation = Validator::make($reminderData, Reminder::$createReminder);
        if ($validation->passes()) {
            if(strlen($reminderData['date'])==5){
                $reminderData['date'] = date("Y-m-d ".$reminderData['date'].':00');
            }
            Reminder::create($reminderData);
            return redirect()->route('reminder')->with('success', 'Reminder created Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
    }

    public function reminderEdit($id){
        $reminder = Reminder::where('id', $id)->first();
        return view('admin.reminder.edit')->with('reminder', $reminder);
    }

    public function reminderUpdateData(){
        $reminderData = Input::except('_token');
        if($reminderData['type']=='1'){
            $reminderData['date'] = Input::get('datetime');
        }else{
            $reminderData['date'] = Input::get('time');
        }
        unset($reminderData['datetime']);
        unset($reminderData['time']);
        if(strlen($reminderData['date'])==5){
                $reminderData['date'] = date("Y-m-d ".$reminderData['date'].':00');
        }
        //return $reminderData;
        $reminderExist = Reminder::where('id', $reminderData['id'])->first();
        if($reminderExist){
            $validation = Validator::make($reminderData, Reminder::$updateReminder);
        if ($validation->passes()) {
            $data['title'] = $reminderData['title'];
            $data['message'] = $reminderData['message'];
            $data['date'] = $reminderData['date'];
            $data['type'] = $reminderData['type'];
            $data['status'] = $reminderData['status'];
            Reminder::where('id', $reminderData['id'])->update($data);
            return redirect()->route('reminder')->with('success', 'Reminder updated Success');
        }
        else{
            return back()->withInput()->with('errors', $validation->messages());
        }
        }else{
            return back()->withInput()->with('error', 'Invalid Reminder Id');
        }
    }

    public function reminderDelete($id){
        Reminder::destroy($id);
        return redirect()->route('reminder')->with('success', 'Reminder deleted Success');
    }

    public function reminderStatus($id,$status){
        if($status=='Active')
        {
            $data['status'] = 1;
            Reminder::where('id', $id)->update($data);
            return redirect()->route('reminder')->with('success', 'Reminder Activated Success');
        }else if($status=='InActive'){
            $data['status'] = 0;
            Reminder::where('id', $id)->update($data);
            return redirect()->route('reminder')->with('success', 'Reminder DeActivated Success');
        }else if ($status=='Renew'){
            $data['status'] = 1;
            Reminder::where('id', $id)->update($data);
            return redirect()->route('reminder')->with('success', 'Reminder Renewed Success');
        }else{
            return redirect()->route('reminder')->with('error', 'Invalid Action');
        }
    }

    //End of Reminder

    // public function reminder(){
    //     $data = Reminder::all();
    //     return view('admin.reminder.index')->with('datas', $data);
    // }

    // public function reminderCreate(){
    //     $data = Input::all();
    //     $data['status'] = 1;
    //     if(strlen($data['date'])==5){
    //         $data['date'] = date("Y-m-d ".$data['date'].':00');
    //     }
    //     Reminder::create($data);
    //     $Response = array('success' => 1,'message' => 'Reminder Created Succesfully !');
    //     return $Response;
    // }

    // public function reminderEdit(){
    //     $data = Input::all();
    //     if(strlen($data['date'])==5){
    //         $data['date'] = date("Y-m-d ".$data['date'].':00');
    //     }
    //     Reminder::where('id', Input::get('id'))->update($data);
    //     $Response = array('success' => 1,'message' => 'Reminder Edited Succesfully !');
    //     return $Response;
    // }

    // public function reminderDelete(){
    //     Reminder::where('id', Input::get('id'))->delete();
    //     $Response = array('success' => 1,'message' => 'Reminder Deleted Succesfully !');
    //     return $Response;
    // }

    //End of Configuration


    #Maintenance Functions

    public function SyncBlogCount(){
        $tags = Tag::orderBy('id', 'asc')->get();
        for ($i=0; $i < count($tags) ; $i++) { 
            $data['count'] = BlogTag::where('tag_id', $tags[$i]->id)->count();
            Tag::where('id', $tags[$i]->id)->update($data);
        }
        $Response = array('success' => 1,'message' => 'Synced Blog Count Succesfully !');
        return $Response;
    }

    

}