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
            Blog::where('id', $tagData['id'])->update($data);
            return redirect()->route('blog')->with('success', 'Blog Deactivated Success');
        }else if($status=='InActive'){
            $data['status'] = 0;
            $data['status'] = $tagData['status'];
            Blog::where('id', $tagData['id'])->update($data);
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

    //Start of Configuration

    public function config(){
        $configs = Configuration::all();
        return view('admin.config.index')->with('configs', $configs);
    }

    public function configCreate(){
        Configuration::create(['name' => Input::get('key'),'desc' => Input::get('value'),'status' => 1]);
        $Response = array('success' => 1,'message' => 'Config Created Succesfully !');
        return $Response;
    }

    public function configEdit(){
        $data['name'] = Input::get('key');
        $data['desc'] = Input::get('value');
        Configuration::where('id', Input::get('id'))->update($data);
        $Response = array('success' => 1,'message' => 'Config Edited Succesfully !');
        return $Response;
    }

    public function configDelete(){
        Configuration::where('id', Input::get('id'))->delete();
        $Response = array('success' => 1,'message' => 'Config Deleted Succesfully !');
        return $Response;
    }

    //End of Configuration

    //Start of Reminder

    public function reminder(){
        $data = Reminder::all();
        return view('admin.reminder.index')->with('datas', $data);
    }

    public function reminderCreate(){
        $data = Input::all();
        $data['status'] = 1;
        if(strlen($data['date'])==5){
            $data['date'] = date("Y-m-d ".$data['date'].':00');
        }
        Reminder::create($data);
        $Response = array('success' => 1,'message' => 'Reminder Created Succesfully !');
        return $Response;
    }

    public function reminderEdit(){
        $data = Input::all();
        if(strlen($data['date'])==5){
            $data['date'] = date("Y-m-d ".$data['date'].':00');
        }
        Reminder::where('id', Input::get('id'))->update($data);
        $Response = array('success' => 1,'message' => 'Reminder Edited Succesfully !');
        return $Response;
    }

    public function reminderDelete(){
        Reminder::where('id', Input::get('id'))->delete();
        $Response = array('success' => 1,'message' => 'Reminder Deleted Succesfully !');
        return $Response;
    }

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