@extends('public.layout.index')
@section('content')
    <div class="container">
      <div class="jumbotron sa-home-card">
        <p class="sa-img-box"><img src="{{ asset('/').('public/images/sulthan-allaudeen.jpg') }}" class="img-fluid rounded-circle sa-img" alt="Sulthan Allaudeen"> <h1 class="sa-name">Sulthan Allaudeen</h1>
         <div class="row">
          <div class="col-4">
            <a href="https://github.com/sulthanallaudeen" class="sa-social-lnk" target="_blank"><i class="fa fa-github sa-fa-s-lnk" aria-hidden="true"></i></a>
          </div>
          <div class="col-4">
            <a href="https://stackoverflow.com/users/3282633/sulthan-allaudeen" class="sa-social-lnk" target="_blank"><i class="fa fa-stack-overflow sa-fa-s-lnk" aria-hidden="true"></i></a>
          </div>
          <div class="col-4">
            <a href="https://www.linkedin.com/in/sulthanallaudeen/" class="sa-social-lnk" target="_blank"><i class="fa fa-linkedin-square sa-fa-s-lnk" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
@stop