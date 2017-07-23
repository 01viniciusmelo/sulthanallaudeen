<?php

namespace App;

use App\Blog;
use URL; ?>
@extends('layout.public')
@section('content')
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <div id="resultArea"></div>
                <h1 class="page-header">
                Sulthan Allaudeen<small>- Blog Posts</small>
                </h1>
                @foreach($posts as $post)
                <!-- Start of Blog -->
                <a href="blog/{{ $post->blog_url }}" style="text-decoration:none">{{ $post->blog_title }}</a><br>
                <p class="lead hide">
                    by <a href="javascript:;">Sulthan Allaudeen</a>
                </p>
                <p class="pull-left">
                Tagged : 
                <?php
                $tag = BlogTag::where('blog_id', $post->id)->get();
                ?>
                @foreach ($tag as $tagName)
                <?php 
                    $tagName = Tag::where('id', $tagName->tag_id)->pluck('tag_title');
                    $tagTitle = str_replace(" ","-",$tagName[0]);
                ?>
                <a href="{{ URL::to('tag/'.$tagTitle) }}" title="{{ 'Tags related to : '.$tagTitle }}">{{ $tagTitle }}</a>
                @endforeach
                </p>
                <p class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> Posted on {{date("M d, Y", strtotime($post->blog_date))}}</p>
                <p class='row'><img class="img-responsive hide" src="javascript:;" alt=""><?php echo substr($post->blog_content, 0, 150); ?></p>
                <a class="btn btn-primary" href="blog/{{ $post->blog_url }}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <hr>
                <!-- End of Blog -->
                @endforeach
                <p class='margin-center'>
                {{ $posts->links()}}
                </p>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchBlog">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Tags</h4>
                    <div class="row">
                    @foreach ($tags as $tag)
                    <?php
                        $tagTitle = str_replace(" ","-",$tag->tag_title);
                    ?>
                    <div class="col-lg-6">
                      <ul class="list-unstyled">
                          <li><a href="{{ asset('/tag').'/'.$tagTitle }}">{{ $tagTitle }} <span class="badge">{{ $count = BlogTag::where('tag_id', $tag->id)->count() }}</span></a></li>
                      </ul>
                    </div>
                    @endforeach
                    </div>
                </div>
                <div class="well hide">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>


    </div>
    <!-- /.container -->
<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"> 
@stop