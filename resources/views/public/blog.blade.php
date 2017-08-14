<?php
namespace App;
use App\Blog;
use URL; ?>
@extends('layout.public')
@section('content')
<link href="{{ asset('/').('public/css/offcanvas.css') }}" rel="stylesheet">
<script src="{{ asset('/').('public/js/offcanvas.js') }}"></script>
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-12 col-md-9">
          <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
            <div class="col-12 col-lg-12">
              <h2>{{ $blog->blog_title}}</h2>
              <p class="text-left">Tagged : 
              <?php
                $tag = BlogTag::where('blog_id', $blog->id)->get();
              ?>
              @foreach ($tag as $tagName)
              <?php $tagName = Tag::where('id', $tagName->tag_id)->pluck('tag_title'); ?>
              <a href="{{ URL::to('tag/'.$tagName[0]) }}" title="{{ 'Tags related to : '.$tagName[0] }}" class="btn btn-success">{{ $tagName[0] }}</a>
              @endforeach
              </p>
              <p class="text-right">
              <?php
                $date = date('d M Y', strtotime($blog->created_at));
              ?>
              <a href="#" class="badge badge-primary">Posted on : {{$date}}</a>
              </p>
              <p><?php echo $blog->blog_content ?></p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
          <p class="list-group-item active">Blog Search</p>
            <a href="#" class="list-group-item"><input class="form-control mr-sm-2" type="text" placeholder="Enter Search Query" aria-label="Search" id="searchBlog"></a>
          </div>
          <br>
          <div class="list-group">
          <p class="list-group-item active">Blog Tags</p>
          <p class="list-group-item">
            @foreach ($tags as $tag)
            <a class="badge badge-danger" href="{{ asset('/tag').'/'.$tag->tag_title }}" style="margin:5px;">
              {{ $tag->tag_title }} <span class="badge badge-success">{{ $count = BlogTag::where('tag_id', $tag->id)->count() }}</span>
            </a>
            @endforeach
          </p>
          
            
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>
@stop