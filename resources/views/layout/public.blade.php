<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sulthan Allaudeen's Personal Site and Blog about Technology and Stuff">
    <meta name="author" content="Sulthan Allaudeen">
    <link rel="icon" href="public/images/favicon.png">

    <title>Sulthan Allaudeen</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/').('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/').('public/css/album.css') }}" rel="stylesheet">
    <link href="{{ asset('/').('public/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <script src="{{ asset('/').('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/custom.js') }}"></script>
  </head>

  <body>

      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ URL::to('/') }}">Sulthan Allaudeen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')

    <footer class="text-muted red">
      <div class="container">
      <p class="text-muted footer-text">&copy; 2017 <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" src="{{ asset('/').('public/images/cc.png') }}" target="_new" /></a>
      <span class="pull-right">Created using <a href="http://www.laravel.com/" target="_new">Laravel 5.4 </a> with the help of <a href="http://getbootstrap.com" target="_new">Twitter Bootstrap</a> and <a href="http://fontawesome.io" target="_new">Font Awesome</a>.</span>
      <br><i class="fa fa-code fa-fw"></i> Sulthan Allaudeen
      <br><i class="fa fa-envelope fa-fw"></i> <a href="mailto:sa@sulthanallaudeen.com">sa@sulthanallaudeen.com</a>
      <br><i class="fa fa-phone-square fa-fw"></i> 904.244.5010</p>
      {{ csrf_field() }}
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/').('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/').('public/js/ie10-viewport-bug-workaround.js') }}"></script>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-87359599-1', 'auto');
    ga('send', 'pageview');
  </script>

  </body>
</html>