<?php

namespace App;

use App\Blog;
use URL; ?>
@extends('layout.public')
@section('content')
<div class="row">
    <div class="col-md-8">

        <h1 class="page-header">
            Sysaxiom
            <small>- Blog Posts</small>
        </h1>
        <div id="resultArea"></div>
        <div id="blogArea">
            <!-- First Blog Post -->
            @foreach ($posts as $post)
            <h2>
                <a href="blog/{{ $post->blogUrl }}" style="text-decoration:none">{{ $post->blogTitle }}</a>
            </h2>
            <p class="lead">
                by <a style="text-decoration:none">Sulthan Allaudeen</a>
            </p>
            <p align="left">
                Tagged : 
<?php
$tag = BlogTag::where('blog_id', $post->id)->get();
?>
                @foreach ($tag as $tagName)
                <?php $tagName = Tag::where('id', $tagName->tag_id)->pluck('tagTitle'); ?>
                <a href="{{ URL::to('tag/'.$tagName[0]) }}" title="{{ 'Tags related to : '.$tagName[0] }}">{{ $tagName[0] }}</a>
                @endforeach
<?php
$date = date('d M Y', strtotime($post->blogDate));
?></p>
            <p align="right"><span class="glyphicon glyphicon-time"></span> Posted on {{ $date }}</p>
            <hr>
            @endforeach
            <div style=" margin: auto;width: 65%;">
<?php echo $posts->render(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        <!-- Blog Search Well -->
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
                <input type="text" class="form-control" id="searchBlog">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
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
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="{{ asset('/tag').'/'.$tag->tagTitle }}"> {{ $tag->tagTitle }} <span class="badge">{{ $count = BlogTag::where('tag_id', $tag->id)->count() }}</span></a></li>
                    </ul>
                </div>
                @endforeach

                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well" style="display:none">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>

    </div>
</div>
</div>
<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"> 
@stop