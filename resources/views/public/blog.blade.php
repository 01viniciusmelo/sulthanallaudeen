<?php namespace App; use App\Blog; use URL;?>
@extends('layout.public')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div id="resultArea"></div>
                <div id="blogArea">
                    <h1>{{ $data->blog_title}}</h1>
                    <p class="lead hide">
                        by <a style="text-decoration:none">Sulthan Allaudeen</a>
                    </p>
                    <p class="pull-left">
                    Tagged : 
                    <?php
                    $tag = BlogTag::where('blog_id', $data->id)->get();
                    ?>
                    @foreach ($tag as $tagName)
                    <?php 
                        $tagName = Tag::where('id', $tagName->tag_id)->pluck('tag_title');
                        $tagTitle = str_replace(" ","-",$tagName[0]);
                    ?>
                    <a href="{{ URL::to('tag/'.$tagTitle) }}" title="{{ 'Tags related to : '.$tagTitle }}">{{ $tagTitle }}</a>
                    @endforeach
                    <?php
                    $date = date('d M Y', strtotime($data->created_at));
                    ?></p>
                    <p class="pull-right"><span class="fa fa-clock-o"></span> Posted on {{ $date }}</p>
                    <p class="row">
                    <?php echo $data->blog_content; ?>
                    </p>
                </div>
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
                            <span class="fa fa-search"></span>
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
                        <li><a href="{{ asset('/tag').'/'.$tag->tag_title }}"> {{ $tag->tag_title }} <span class="badge">{{ $count = BlogTag::where('tag_id', $tag->id)->count() }}</span></a></li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>

                <!-- Side Widget Well -->
                <div class="well hide">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"> 
@stop