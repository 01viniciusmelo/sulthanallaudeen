@extends('layout.public')
@section('content')
<div class="row">
        <div class="col-xs-12 col-sm-8">
          <!-- ABOUT ME -->
          <div class="box">
            <h2>About Me</h2>
            <p>Software Engineer who loves Rapid and Serious Web Applications and Services mostly in PHP.</p>
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
                  <h3>I was born in Dindigul</h3>
                  <p>Did the basics school in Om Shanthi CBSE School which thought me the basic logical thinking and lot of stuffs.</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2007</div>
                <div class="description pull-right">
                  <h3>Schooling and handling Computing Machine</h3>
                  <p>Early education with computers was done while schooling. The self interest on handling computing machine does a lot</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2005</div>
                <div class="description pull-right">
                  <h3>Bachelors Graduation in Computer Science</h3>
                  <p>Completed the Bachelors Degree in Computer Science in Rockfort City (Trichy) - JMC. Participated in NCC and attended national level camps - RDC</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2009</div>
                <div class="description pull-right">
                  <h3>Masters Graduation in Computer Science</h3>
                  <p>Did the Masters in Computer Applicaton at Vel Tech Engineering College, Chennai. Learned the awesome language PHP and developed several applications for personal and public usage.</p>
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
          <div class="box">
            <h2>Languages</h2>
            <div id="language-skills">
              <div class="skill">Polish <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">English <div class="icons pull-right"><div style="width: 60%;" class="icons-red"></div></div></div>
            </div>
          </div>
          <!-- HOBBIES -->
          <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">Photography</div>
            <div class="hobby">Fitness</div>
            <div class="hobby">Programming</div>
          </div>
        </div>
      </div>
    </div>
@stop