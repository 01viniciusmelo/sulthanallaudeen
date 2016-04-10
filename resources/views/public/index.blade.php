@extends('layout.public')
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-8">
        <!-- ABOUT ME -->
        <div class="box">
            <h2>Introduction</h2>
            <p>I am a <b>Full Stack Developer</b>. I live in <b>Chennai</b> - India. I graduated <b>
                    Masters in Computer science</b> at Vel Tech Engineering College, Chennai. 
                At this site you can find information what I do at the moment, what's my current experience and skills and which skills I don't have (yet). 
                You may also be interested to view my profile at <b><a href="http://stackoverflow.com/users/3282633" target="_new">Stackoverflow</a></b>.</p>
        </div>
        <div class="box">
            <h2>About Me</h2>
            <p>I have over 2.8 years experience in programming and in that time I had opportunity to learn technologies that are useful at websites and web applications development. The most important ones are PHP, Laravel framework, MySQL, JQuery, AWS and GIT. I have more interest on writing web services for across platforms, also follows Agile</p>
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
                    <div class="description">Developed an Application :: <b><a href='greenhoppingapp.com' target="_new">GreenHopping</a></b> - A Juice Ordering System. Developed Front End, Back End, Web Services with Admin Panel hosted on AWS. Also, developing an application for <a href="testmyblood.in" target="_new">Medical based activities</a></b>.</div>
                </div>
            </div>
            <div class="job clearfix">
                <div class="col-xs-3">
                    <div class="where">Bizarre Software Solutions</div>
                    <div class="year">2014-2015</div>
                </div>
                <div class="col-xs-9">
                    <div class="profession">BackEnd Developer</div>
                    <div class="description">Developed <a href="http://api.taxihail.com/MaldenTransInc" target="_new">MTI</a>, Masna Taxi and Hashtag Pizza. Also written webservices for Android and iOS Devices using Google Cloud Messages and Apple Push Notifiatoin System. Tweaked on Hybrid Application on Android and Windows</div>
                </div>
            </div>
            <div class="job clearfix">
                <div class="col-xs-3">
                    <div class="where">Mind Ocean Technologies</div>
                    <div class="year">2013-2014</div>
                </div>
                <div class="col-xs-9">
                    <div class="profession">PHP Developer</div>
                    <div class="description">Written few modules for Learning Management System named as E-Future and developed many functions for Real Estate Portal named as Earthzu.</div>
                </div>
            </div>
        </div>
        <!-- EDUCATION -->
        <div class="box">
            <h2>Education</h2>
            <ul id="education" class="clearfix">
                <li>
                    <div class="year pull-left">2013</div>
                    <div class="description pull-right">
                        <h3>Masters Graduation in Computer Science</h3>
                        <p>Did the Masters in Computer Applicaton at Vel Tech Engineering College, Chennai. Started with the awesome language PHP and developed several applications for personal and public usage.</p>
                    </div>
                </li>
                <li>
                    <div class="year pull-left">2010</div>
                    <div class="description pull-right">
                        <h3>Bachelors Graduation in Computer Science</h3>
                        <p>Completed the Bachelors Degree in Computer Science in Rockfort City (Trichy)</p>
                    </div>
                </li>
                <li>
                    <div class="year pull-left">2007</div>
                    <div class="description pull-right">
                        <h3>Schooling and handling Computing Machine</h3>
                        <p>Early education with computers was initiated during schooling, the place which thought me handling computing machine, logical thinking etc.,</p>
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
                <div class="title only pull-right" id="adminmobile"></div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
                <div class="title only pull-right" id="adminemail"></div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-github fa-fw"></span></div>
                <div class="title only pull-right" id="admingithub"></div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-stack-overflow fa-fw"></span></div>
                <div class="title only pull-right" id="adminstackoverflow"></div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
                <div class="title pull-right">Twitter</div>
                <div class="description pull-right" id='admintwitter'></div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
                <div class="title pull-right">Facebook</div>
                <div class="description pull-right" id='adminfacebook'></div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
                <div class="title pull-right">Skype</div>
                <div class="description pull-right" id="adminskype"></div>
            </div>
        </div>
        <!-- SKILLS -->
        <div class="box">
            <h2>Skills</h2>
            <div class="skills">
                <div class="item-skills" data-percent="1.00">Laravel (framework)</div>
                <div class="item-skills" data-percent="0.90">PHP</div>
                <div class="item-skills" data-percent="0.80">MySQL</div>
                <div class="item-skills" data-percent="0.85">JQuery</div>
                <div class="item-skills" data-percent="0.75">AngularJS</div>
                <div class="item-skills" data-percent="0.78">GIT</div>
                <div class="item-skills" data-percent="0.74">AWS</div>
                <div class="skills-legend clearfix">
                    <div class="legend-left legend">Beginner</div>
                    <div class="legend-left legend"><span>Proficient</span></div>
                    <div class="legend-right legend"><span>Expert</span></div>
                    <div class="legend-right legend">Master</div>
                </div>
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
@endsection