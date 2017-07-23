@extends('layout.public')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="homehead">Sulthan Allaudeen</h1>
            <h2 class='hide'>
              <a href="#">About</a> | 
              <a href="#">Blog</a> | 
              <a href="#">Contact</a>
            </h2>
        </div>
        <div class="col-md-4">
            <p>
            <img src="public/asset/image/sulthan-allaudeen.jpg" class="img-circle img-responsive" alt="Sulthan Allaudeen"/>
            </p>
        </div>
    </div>
    <div class="row social-buttons">
        <div class="col-md-3 col-xs-6">
            <span class="twitter-button orange">
                <a href="https://twitter.com/allaudeens" target="_blank">
                    <span class="fa-stack fa-5x" aria-hidden="true">
                        <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse" aria-hidden="true"></i>
                    </span>
                </a>
            </span>
        </div>
        <div class="col-md-3 col-xs-6">
            <span class="github-button orange">
                <a href="https://github.com/sulthanallaudeen" target="_blank">
                    <span class="fa-stack fa-5x" aria-hidden="true">
                        <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
                        <i class="fa fa-github-alt fa-stack-1x fa-inverse" aria-hidden="true"></i>
                    </span>
                </a>
            </span>
        </div>
        <div class="col-md-3 col-xs-6">
            <span class="linkedin-button orange">
                <a href="https://www.linkedin.com/in/sulthanallaudeen" target="_blank">
                    <span class="fa-stack fa-5x" aria-hidden="true">
                        <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
                        <i class="fa fa-linkedin fa-stack-1x fa-inverse" aria-hidden="true"></i>
                    </span>
                </a>
            </span>
        </div>
        <div class="col-md-3 col-xs-6">
            <span class="instagram-button orange">
                <a href="https://www.instagram.com/allaudeens/" target="_blank">
                    <span class="fa-stack fa-5x" aria-hidden="true">
                        <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse" aria-hidden="true"></i>
                    </span>
                </a>
            </span>
        </div>
    </div>
</div>
<!-- </div> -->
  <hr>
@stop