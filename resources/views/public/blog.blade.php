@extends('public.layout.index')
@section('content')
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-12 col-md-9">
          <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
            <div class="col-9 col-lg-9">
              <h2>Blog Full Title</h2>
              <p>Blog Full Base Content</p>
            </div>
          </div>
        </div>
        <div class="col-3 col-md-3 sidebar-offcanvas" id="sidebar">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Search Blog</h4>
            <form>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search Query">
            </div>
          </form>
          </div>
        </div>
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title">Blog Tags</h4>
            <button type="button" class="btn btn-primary">PHP <a href="#" class="badge badge-dark">8</a></button>
          </div>
        </div>
        </div>
      </div>
    </div>
@stop