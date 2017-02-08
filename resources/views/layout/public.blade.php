<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sulthan Allaudeen</title>
    <meta name="author" content="Sulthan Allaudeen">
    <meta name="description" content="Sulthan Allaudeen's Personal Site and Blog about Technology and Stuff">
    <meta name="keywords" content="sulthan, allaudeen, sulthan allaudeen, sulthanallaudeen, full stack developer, chennai, full stack developer chennai, developer, php, nodejs, mean stack developer, laravel developer">
    <link rel="icon" href="public/img/favicon.png" type="image/gif" sizes="16x16">
    <link href="{{ asset('/').('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/').('public/css/font-awesome.css') }}" rel="stylesheet">
    
    <link href="{{ asset('/').('public/css/main.css') }}" rel="stylesheet">
    <!-- JQUERY -->
    <script src="{{ asset('/').('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/').('public/js/custom.js') }}"></script>
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
              <img src="{{ asset('/').('public/img/sulthan-allaudeen.jpg') }}" alt="Sulthan Allaudeen">
            </div>
            <div id="text-header">
              <h1>Hello,<br> my name is <span>Sulthan Allaudeen</span></h1>
              <h2 class="home-navlink"><a href="{{ URL::to('/') }}">Home</a> | <a href="{{ URL::to('/blog') }}">Blog</a> | <a href="{{ URL::to('/contact') }}">Contact</a>
            </div>
          </div>
        </div>
      </div>
        {{ csrf_field() }}
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
    <!-- BOOTSTRAP -->
    <script src="{{ asset('/').('public/js/bootstrap.min.js') }}"></script>
    <!-- SCRIPTS -->
    <script src="{{ asset('/').('public/js/scripts.js') }}"></script>
    <script type="text/javascript" src="https:﻿//cdn.ywxi﻿.net﻿/js/1.﻿js" async></script>
    <!-- Tracking Code for Google Analytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-87359599-1', 'auto');
  ga('send', 'pageview');
  </script>
  <!-- End of Tracking Code for Google Analytics -->
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '316479198748977'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=316479198748977&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script>
fbq('track', 'Search', {
search_string: 'sulthan allaudeen'
});
</script>


  </body>

</html>