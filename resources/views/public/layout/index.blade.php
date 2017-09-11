<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sulthan Allaudeen's Personal Site and Blog about Technology and Stuff">
    <meta name="keywords" content="sulthan, allaudeen, sulthan allaudeen, sulthanallaudeen, full stack developer, chennai, full stack developer chennai, developer, php, nodejs, mean stack developer, laravel developer">
    <meta name="author" content="Sulthan Allaudeen">
    <link rel="icon" href="{{ asset('/').('public/images/favicon.png') }}">
    <title>Sulthan Allaudeen</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/').('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/').('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/').('public/css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ URL::to('/') }}">Sulthan Allaudeen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      $urlValue = explode("/",$_SERVER['REQUEST_URI']);
      $menu['home'] = '';
      $menu['blog'] = '';
      $menu['contact'] = '';
      $url =  $urlValue[count($urlValue)-1];
      $urlB =  $urlValue[count($urlValue)-2];
      if ($url=='blog'){
        $menu['blog'] = 'active';
      }
      else if ($urlB=='blog'){
        $menu['blog'] = 'active';
      }
      else if ($url=='contact'){
        $menu['contact'] = 'active';
      }
      else{
        $menu['home'] = 'active';
      }
      ?>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{$menu['home']}}">
            <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
          </li>
          <li class="nav-item {{$menu['blog']}}">
            <a class="nav-link" href="{{ URL::to('/blog') }}">Blog</a>
          </li>
          <li class="nav-item {{$menu['contact']}}">
            <a class="nav-link" href="{{ URL::to('/contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')
    <hr>
    <div class="container">
         <div class="row">
           <div class="col-3">
            <ul class="list-unstyled">
              <li>&copy; 2010 - 2017 <a rel="license" target="_blank" href="https://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" class="cc-img"/></a></li>
              <li><i class="fa fa-envelope fa-fw"></i> <a href="mailto:sa@sulthanallaudeen.com">sa@sulthanallaudeen.com</a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="text-muted text-center">Created with <i class="fa fa-heart sa-red" aria-hidden="true"></i> using <a href="http://www.laravel.com/" target="_blank">Laravel </a>! <br>(With the help of <a href="http://getbootstrap.com" target="_blank">Twitter Bootstrap</a> and <a href="http://fontawesome.io" target="_blank">Font Awesome</a>)</p>
            <span class="hide" id="csrf_token">{{csrf_token()}}</span>
          </div>
          <div class="col-3">
            <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fsulthanallaudeen.com%2F" target="blank"><img src="https://www.w3.org/Icons/valid-html20-blue.png"></a>
            <span class='pull-right' id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=zXDi8lx071OVItgGihdEfagLQo0YfNmUadOX0spepLVhyMH3AFGUPxDxTrka"></script></span>
          </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/').('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/custom.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/').('public/js/ie10-viewport-bug-workaround.js') }}"></script>
  </body>
</html>