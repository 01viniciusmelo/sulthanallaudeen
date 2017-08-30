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
    <!-- Custom styles for this template -->
    <link href="{{ asset('/').('public/css/custom.css') }}" rel="stylesheet">
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

    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/').('public/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/').('public/js/ie10-viewport-bug-workaround.js') }}"></script>
  </body>
</html>
