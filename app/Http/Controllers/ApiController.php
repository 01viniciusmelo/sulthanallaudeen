<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#Models
use App\Blog;

class ApiController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function getBlog(){
    $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(10);
    return $blogs;
  }
}
