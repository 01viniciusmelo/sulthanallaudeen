<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Sulthan Allaudeen">
    <meta name="description" content="Sulthan Allaudeen's Personal Site and Blog about Technology and Stuff">
    <meta name="keywords" content="sulthan, allaudeen, sulthan allaudeen, sulthanallaudeen, full stack developer, chennai, full stack developer chennai, developer, php, nodejs, mean stack developer, laravel developer">
    <link rel="icon" href="../../favicon.ico">
    <title>Sulthan Allaudeen</title>
    <link href="{{ asset('/').('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/').('public/asset/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <link href="{{ asset('/').('public/asset/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <!-- Custom styles  -->
    <link href="{{ asset('/').('public/asset/css/theme.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sulthan Allaudeen</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
            <li class=""><a href="{{ URL::to('/blog') }}">Blog</a></li>
            <li class=""><a href="{{ URL::to('/contact') }}">Contact</a></li>
            <li class="dropdown hide">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
@yield('content')
  <footer class="footer">
        <div class="container">
          <p>&copy; 2010 - {{ date("Y") }} <a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" class="cc-img"/></a><a href="/feeds/atom.xml"><i class="fa fa-rss fa-fw"></i></a>
          <input type="hidden", "_token"  name="_token" value="{{ csrf_token()}}" ></p>
        <ul class="list-unstyled">
            <li><i class="fa fa-code fa-fw"></i> Sulthan Allaudeen</li>
            <li><i class="fa fa-envelope fa-fw"></i> <a href="mailto:sa@sulthanallaudeen.com">sa@sulthanallaudeen.com</a></li>
            <li><i class="fa fa-phone-square fa-fw"></i> 904.244.5010</li>
        </ul>
        <p class="text-muted text-center">Created with Love, using <a href="http://www.laravel.com/" target="_blank">Laravel </a>! (With the help of <a href="http://getbootstrap.com" target="_blank">Twitter Bootstrap</a> and <a href="http://fontawesome.io" target="_blank">Font Awesome</a>.)</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/').('public/asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/').('public/asset/js/custom/custom.js') }}"></script>
    <script src="{{ asset('/').('public/asset/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/').('public/asset/js/ie10-viewport-bug-workaround.js') }}"></script>
  </body>
</html>