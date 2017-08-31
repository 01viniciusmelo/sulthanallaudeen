<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('public.index');
    }

    public function blogs(){
        return view('public.blogs');
    }

    public function blog($id){
        return view('public.blog');
    }

    public function contact(){
        return view('public.contact');
    }
}
