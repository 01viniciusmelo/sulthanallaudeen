<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sulthan Allaudeen</title>
    <meta name="description" content="Sulthan Allaudeen's Personal Site / Portfolio">
    <meta name="author" content="Sulthan Allaudeen">
    <link rel="icon" href="public/img/favicon.png" type="image/gif" sizes="16x16">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.css" rel="stylesheet">
    <link href="public/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
              <img src="public/img/sulthan-allaudeen.jpg" alt="Sulthan Allaudeen">
            </div>
            <div id="text-header">
              <h1>Hello,<br> my name is <span>Sulthan Allaudeen</span></h1>
              <h2 class="home-navlink"><a href="/about/">Home</a> | <a href="/about/">About</a> | <a href="/blog/">Blog</a>
            </div>
          </div>
        </div>
      </div>
      
 @yield('content')
 <div class="container panel-footer">
    <footer>
      <p class="text-muted footer-text">&copy; 2016 <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" src="{{ asset('/').('public/img/cc.png') }}" /></a>
      <span class="pull-right">Created using <a href="http://www.laravel.com/" target="_new">Laravel 5.2 </a> with the help of <a href="http://getbootstrap.com">Twitter Bootstrap</a> and <a href="http://fontawesome.io" target="_new">Font Awesome</a>.</span>
      <br><i class="fa fa-code fa-fw"></i> Sulthan Allaudeen
      <br><i class="fa fa-envelope fa-fw"></i> <a href="mailto:sa@sysaxiom.com">sa@sysaxiom.com</a>
      <br><i class="fa fa-phone-square fa-fw"></i> 904.244.5010</p>
    </footer>
  </div>
    <!-- JQUERY -->
    <script src="public/js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->
    <script src="public/js/scripts.js"></script>
  </body>

</html>