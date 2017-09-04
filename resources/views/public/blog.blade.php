@extends('public.layout.index')
@section('content')
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-12 col-md-9">
          <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row" id="resultArea">
          </div>
          <div class="row" id="blogArea">
            <div class="col-9 col-lg-9">
              <h2>{{$blog->title}}</h2>
              <p><?php echo $blog->content; ?></p>
            </div>
          </div>
        </div>
        <div class="col-3 col-md-3 sidebar-offcanvas" id="sidebar">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Search Blog</h4>
            <form>
            <div class="form-group">
              <input type="text" class="form-control" id="searchBlog" aria-describedby="emailHelp" placeholder="Search Query">
            </div>
          </form>
          </div>
        </div>
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Blog Tags</h4>
            @foreach ($tags as $tag)
            <?php
              $tagTitle = str_replace(" ","-",$tag->title);
            ?>
            <a href="{{ URL::to('tag/'.$tagTitle) }}" class="btn btn-primary">{{ $tagTitle }} <span href="#" class="badge badge-dark">{{$tag->count}}</span></a>
            @endforeach
          </div>
        </div>
        </div>
      </div>
    </div>
@stop