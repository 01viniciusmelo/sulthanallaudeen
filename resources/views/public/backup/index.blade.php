@extends('layout.public')
@section('content')
        <div class="col-xs-12">
          <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
              <img src="public/img/sulthan-allaudeen.jpg" alt="Sulthan Allaudeen">
            </div>
            <div id="text-header">
              <h1 class="homehead"><span>Sulthan Allaudeen</span></h1>
              <h2 class="home-navlink"><a href="/about/">Home</a> | <a href="/about/">About</a> | <a href="/blog/">Blog</a></h2>
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <!-- ABOUT ME -->
          <div class="box">
            <h2>About Me</h2>
            <p>Software Engineer who loves and write Rapid and Serious Web Applications and Services mostly in PHP</p>
          </div>
          
          <!-- EXPERIENCES -->
          <div class="box">
            <h2>Experiences</h2>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">Wekancode</div>
                <div class="year">2015 - Till Date</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Full Stack Developer</div>
                <div class="description">Developed an Application :: GreenHopping - A Juice Ordering System. Developed Front End, Back End, Web Services with Admin Panel hosted on AWS.</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">Bizarre Software Solutions</div>
                <div class="year">2014-2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">BackEnd Developer</div>
                <div class="description">Developed MTI, Masna Taxi and Hashtag Pizza. Mostly written webservices for Android and iOS Devices using Google Cloud Messages and Apple Push Notifiatoin System. Tweaked on Hybrid Application on Android and Windows</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">Mind Ocean Technologies</div>
                <div class="year">2013-2014</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">BackEnd Developer</div>
                <div class="description">Written few modules for Learning Management System named as E-Future and developed many functions for Real Estate Portal named as Earthzu.</div>
              </div>
            </div>
          </div>
          <!-- EDUCATION -->
          <div class="box">
            <h2>Education</h2>
            <ul id="education" class="clearfix">
              <li>
                <div class="year pull-left">1990</div>
                <div class="description pull-right">
                  <h3>I was born in Katowice</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, exercitationem, totam, dolores iste dolore est aut modi.</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2005</div>
                <div class="description pull-right">
                  <h3>Secondary school specializing in artistic</h3>
                  <p>Eos, explicabo, nam, tenetur et ab eius deserunt aspernatur ipsum ducimus quibusdam quis voluptatibus.</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2009</div>
                <div class="description pull-right">
                  <h3>First level graduation in Graphic Design</h3>
                  <p>Aspernatur, mollitia, quos maxime eius suscipit sed beatae ducimus quaerat quibusdam perferendis? Iusto, quibusdam asperiores unde repellat.</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2012</div>
                <div class="description pull-right">
                  <h3>Second level graduation in Graphic Design</h3>
                  <p>Ducimus, aliquam tempore autem itaque et accusantium!</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <!-- CONTACT -->
          <div class="box clearfix">
            <h2>Contact</h2>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
              <div class="title only pull-right">904 244 5010</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
              <div class="title only pull-right">hello@sulthanallaudeen.com</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
              <div class="title pull-right">Twitter</div>
              <div class="description pull-right">https://twitter.com/allaudeens</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
              <div class="title pull-right">Facebook</div>
              <div class="description pull-right">https://www.facebook.com/allaudeens</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
              <div class="title pull-right">Skype</div>
              <div class="description pull-right">allaudeens</div>
            </div>
          </div>
          <!-- SKILLS -->
          <div class="box">
            <h2>Skills</h2>
            <div class="skills">
              <div class="item-skills" data-percent="1.00">Laravel (framework)</div>
              <div class="item-skills" data-percent="0.90">PHP</div>
              <div class="item-skills" data-percent="0.70">HTML</div>
              <div class="skills-legend clearfix">
                <div class="legend-left legend">Beginner</div>
                <div class="legend-left legend"><span>Proficient</span></div>
                <div class="legend-right legend"><span>Expert</span></div>
                <div class="legend-right legend">Master</div>
              </div>
            </div>
          </div>
          <!-- LANGUAGES -->
          <div class="box" style="display: none;">
            <h2>Languages</h2>
            <div id="language-skills">
              <div class="skill">Polish <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">English <div class="icons pull-right"><div style="width: 60%;" class="icons-red"></div></div></div>
            </div>
          </div>
          <!-- HOBBIES -->
          <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">Programming</div>
            <div class="hobby">Photography</div>
            <div class="hobby">Fitness</div>
          </div>
        </div>
      </div>
    </div>
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
