<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog')->delete();
        
        \DB::table('blog')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'First Post ',
                'url' => 'First-Post',
                'content' => '<p>This is the First Post of Sysaxiom after the wordpress Installation on 20th May 2015.</p>

<p>This installation should be some 100th installation of various applications within sysaxiom.</p>
',
                'date' => '2014-05-01 20:55:05',
                'status' => 1,
                'created_at' => '2015-09-30 01:32:21',
                'updated_at' => '2015-09-30 11:27:57',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Simple jquery ajax call to a .txt file ',
                'url' => 'Simple-jquery-ajax-call-to-a-.txt-file',
                'content' => '<p>Here&rsquo;s the simple ajax call to the text file which would return the content the targeted text fil</p>

<p><strong>Step 1 :</strong>&nbsp;Create a new .php and .txt file</p>

<p><strong>Step 2 :</strong>&nbsp;In the .php file include the jquery minimal version</p>

<pre>

&nbsp;</pre>

<p><strong>Step 3 :</strong>&nbsp;Introduce a trigger and a result area</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>

&nbsp;</pre>

<div id="trigger">Get the Result</div>

<div id="result">&nbsp;</div>
</div>

<p><strong>Step 4 :</strong>&nbsp;Write a jquery click event</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
$(&quot;#trigger&quot;).click(function(){
// ajax call here
});</pre>
</div>

<p><strong>Step 5 :</strong>&nbsp;Place the ajax call over there</p>

<pre>
$.ajax({url: &quot;demo_test.txt&quot;, success: function(result){
$(&quot;#result&quot;).html(result);
}});</pre>

<p>And you&rsquo;re done !!</p>

<p><strong>Here&rsquo;s the code that you look for&nbsp;:&nbsp;</strong></p>

<p>&nbsp;</p>

<p>Well, i won&rsquo;t say how to create a text file and put content inside it !!</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
        'date' => '2015-05-03 21:46:34',
        'status' => 1,
        'created_at' => '2015-09-30 12:54:21',
        'updated_at' => '2015-10-05 23:16:44',
    ),
    2 => 
    array (
        'id' => 3,
        'title' => 'Google Maps Marker Shutsdown temporarily starting from 12th may 2015 ',
        'url' => 'Google-Maps-Marker-Shutsdown-temporarily-starting-from-12th-may-2015',
        'content' => '<p>After pranksters used Google Map Maker to draw an&nbsp;<a href="http://thenextweb.com/google/2015/04/24/theres-an-android-peeing-on-apple-on-google-maps-and-we-cant-figure-out-why/">Android peeing on an Apple Logo</a>&nbsp;and engage in other acts of spammy vandalism, Google&nbsp;<a href="https://productforums.google.com/forum/#!category-topic/map-maker/news-and-announcements/crFEbGXJ-HI">has announced</a>&nbsp;that it will temporarily shut down its online map editor while it rethinks its approval process.</p>

<p>&nbsp;</p>

<p>Here is the screen that i have experienced few moments ago.</p>

<p><img alt="" class="img-thumbnail" src="../images/blog/GoogleMapMarkerWarning2015.png" style="height:768px; width:1366px" /></p>

<p>At the same time, i can able to surf few of the local address of mine.</p>

<p>I am not sure about the exact reason. However i can advice to surf over few official releases</p>

<p><img alt="" class="img-thumbnail" src="../images/blog/GoogleMapMarkerWarning-1.png" style="height:768px; width:1366px" /></p>
',
        'date' => '2015-05-12 06:54:26',
        'status' => 1,
        'created_at' => '2015-09-30 12:56:21',
        'updated_at' => '2015-10-16 10:07:58',
    ),
    3 => 
    array (
        'id' => 4,
        'title' => 'Video Recording with voice is easy and simple ',
        'url' => 'Video-Recording-with-voice-is-easy-and-simple',
        'content' => '<p>Last night I wanted to record a video with voice for a demo of my project. I really fear how i can do that. Then, I just remember about the same thing i did in the college. i.e., the project based on android in my Final year of the Course MCA.</p>

<p>&nbsp;</p>

<p>Then i simply surfed for the video recording software online. I got few and a software called as Debut Video Capture Software attracted me. I simply downloaded it and just recorded my desktop for a couple of minutes to find out the output size of the video because i will be uploading the output video in youtube for customer feedback. It works as expected.</p>

<p>&nbsp;</p>

<p>Then, the following i prepared for the video recoridng session and started it a while and after some 15 recordings the software just gave me an alert regarding expiration of validity, but i wanted to record another 2.</p>

<p>&nbsp;</p>

<p>Then i searched for the serial key and found it&nbsp;<em>41732100-uefacl&nbsp;</em>and here is the&nbsp;<a href="http://www.serialscore.com/nch-debut-video-capture-software-pro-1.82-serial-696.html">link</a>&nbsp;for it.</p>

<p>&nbsp;</p>

<p>And i presented those videos to the client and expereinced the simplicity in works&nbsp;<img alt=":)" src="http://localhost/ht-wp/wp-includes/images/smilies/simple-smile.png" /></p>
',
    'date' => '2015-05-15 10:54:26',
    'status' => 1,
    'created_at' => '2015-09-30 12:57:06',
    'updated_at' => '2015-10-16 10:06:55',
),
4 => 
array (
    'id' => 5,
    'title' => 'Introduction to PHP ',
    'url' => 'Introduction-to-PHP',
    'content' => '<p>After posting few posts in Sysaxiom i felt that&nbsp;Though i know a little about PHP i would like to give a short intro about PHP before moving to future &nbsp;posts.</p>

<p><strong>Intro :&nbsp;</strong></p>

<p><strong>&nbsp; &nbsp; &nbsp;</strong>If you&nbsp;<a href="https://www.google.co.in/search?q=What+is+php" target="_blank">Search</a>&nbsp;you can straight away found the below given screen which itself stands a little explanation.</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/05/whatisphp.png"><img alt="whatisphp" class="img-thumbnail" src="../images/blog/whatisphp.png" style="height:438px; width:826px" /></a></p>

<p>&nbsp;</p>

<p>As &nbsp;of&nbsp;<a href="http://php.net/" target="_blank">php&rsquo;s official website</a>&nbsp;:</p>

<p>PHP is a popular general-purpose scripting language that is especially suited to web development.</p>

<p>Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>

<p>&nbsp;</p>

<p>It&rsquo;s really a super cool language and&nbsp;<a href="https://www.google.co.in/#q=php+created+by" target="_blank">PHP is created</a>&nbsp;&nbsp;by&nbsp;<a href="http://lerdorf.com/bio/" target="_blank">Rasmuc Lerdorf</a>&nbsp;and is now ~ maintained by Andy Gutman and Zeev Suraski. You can find more at&nbsp;<a href="http://en.wikipedia.org/wiki/PHP" target="_blank">Wiki</a>.</p>

<p><strong>Here are some resources to learn php&nbsp;</strong></p>

<p>1. Official Website of PHP &ndash;&nbsp;<a href="http://php.net/" target="_blank">php.net</a></p>

<p>2. PHP The Right Way &ndash;&nbsp;<a href="http://www.phptherightway.com/" target="_blank">http://www.phptherightway.com/</a></p>

<p>3. Tutorialspont &ndash;&nbsp;<a href="http://www.tutorialspoint.com/php/" target="_blank">http://www.tutorialspoint.com/php/</a></p>
',
    'date' => '2015-05-18 09:44:26',
    'status' => 1,
    'created_at' => '2015-09-30 13:02:15',
    'updated_at' => '2015-10-05 23:32:27',
),
5 => 
array (
    'id' => 6,
    'title' => 'How to Install and use PHP in your Machine ',
    'url' => 'How-to-Install-and-use-PHP-in-your-Machine',
    'content' => '<p>After the short introduction of PHP, A Question should be raise.</p>

<p><strong>How to use PHP in my machine ?</strong></p>

<p>Yes, Obviously there should be.</p>

<p>What ever the Operating System you running XAMPP is always there to support you.</p>

<p>&nbsp;</p>

<p>XAMPP is a free and open source cross platform web server solution package. It is a bundle that consists of the following Bundles.</p>

<p>&nbsp;</p>

<p>X &ndash; Cross Platform</p>

<p>A &ndash; Apache</p>

<p>M &ndash; MySQL</p>

<p>P &ndash; PHP</p>

<p>P &ndash; PERL</p>

<p>Ofcourse, &nbsp;I have done few video tutorials, screenshots on how to install XAMPP in Windows and Linux. This time i shall recommend Wikihow articles which explains Installing&nbsp;<a href="http://www.wikihow.com/Install-XAMPP-for-Windows" target="_blank">XAMPP on Windows</a>&nbsp;and&nbsp;<a href="http://www.wikihow.com/Install-XAMPP-on-Linux" target="_blank">Linux</a>.</p>

<p>&nbsp;</p>

<p>There are many options in the operating system which enables you to auto start the xampp service whenever you turn on the operating system. You shall enable and enjoy that feature too.</p>

<p>And&nbsp;<a href="http://www.phpmyadmin.net/home_page/index.php" target="_blank">phpMyAdmin</a>&nbsp;is a great tool to handle your database &ndash; MySQL and i give a tip to change your&nbsp;<a href="http://www.phpmyadmin.net/home_page/themes.php" target="_blank">theme</a>&nbsp;and give your admin a classic look.</p>

<p>&nbsp;</p>

<p>People say to use</p>

<p>Wampp on Windows</p>

<p>Lampp on Linux</p>

<p>Mampp on Mac</p>

<p>&nbsp;</p>

<p>But I always prefer XAMPP Everywhere, Because why should i pluck the seeds when already it was collected in the pot&nbsp;<img alt=":)" src="http://localhost/ht-wp/wp-includes/images/smilies/simple-smile.png" /></p>
',
'date' => '2015-05-28 11:15:26',
'status' => 1,
'created_at' => '2015-09-30 13:03:07',
'updated_at' => '2015-09-30 13:03:07',
),
6 => 
array (
'id' => 7,
'title' => 'Why one should not use mysql functions ',
'url' => 'Why-one-should-not-use-mysql-functions',
'content' => '<p>The MySQL is officially&nbsp;<a href="https://wiki.php.net/rfc/mysql_deprecation" target="_blank">depreciated</a>&nbsp;and will be completely removed in php 7.</p>

<p>&nbsp;</p>

<p>You can see the below given warning message in all posts of&nbsp;<a href="http://php.net/manual/en/function.mysql-affected-rows.php" target="_blank">mysql functions</a>&nbsp;in the php.net website.</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/05/mysql_depreciated.png"><img alt="mysql_depreciated" class="img-thumbnail" src="../images/blog/mysql_depreciated.png" style="height:194px; width:848px" /></a></p>

<p>&nbsp;</p>

<p>i.e.,</p>

<p><strong>Warning :&nbsp;</strong></p>

<p>This extension is deprecated as of PHP 5.5.0, and will be removed in the future. Instead, the<a href="http://php.net/manual/en/book.mysqli.php">MySQLi</a>&nbsp;or&nbsp;<a href="http://php.net/manual/en/ref.pdo-mysql.php">PDO_MySQL</a>&nbsp;extension should be used. See also&nbsp;<a href="http://php.net/manual/en/mysqlinfo.api.choosing.php">MySQL: choosing an API</a>&nbsp;guide and<a href="http://php.net/manual/en/faq.databases.php#faq.databases.mysql.deprecated">related FAQ</a>&nbsp;for more information. Alternatives to this function include:</p>

<ul>
<li><a href="http://php.net/manual/en/mysqli.affected-rows.php">mysqli_affected_rows()</a></li>
<li><a href="http://php.net/manual/en/pdostatement.rowcount.php">PDOStatement::rowCount()</a></li>
</ul>

<p><a href="http://stackoverflow.com/a/12860046/3282633" target="_blank">Here</a>&nbsp;is the beautiful answer about this topic.</p>

<p>&nbsp;</p>

<p>And to be honest, I suggest everyone to use mysqli&rsquo;s Object Oriented Style and it will make your code and you smart. And Never stick to w3school&rsquo;s procedural style as it might make you to think less&nbsp;<img alt=":)" src="http://localhost/ht-wp/wp-includes/images/smilies/simple-smile.png" /></p>
',
'date' => '2015-06-01 20:04:26',
'status' => 1,
'created_at' => '2015-09-30 13:04:21',
'updated_at' => '2015-10-16 10:06:11',
),
7 => 
array (
'id' => 8,
'title' => 'New Github Repository PHP – MySQL(i) All in One ',
'url' => 'New-Github-Repository-PHP-–-MySQL(i)-All-in-One',
'content' => '<p>Yesterday, I had a plan to have a new repo which was in my mind for a while.</p>

<p>I just started with the New Repo which was very little but efficient and it covers all possible operations in PHP and MySqli in Object Oriented Style.</p>

<p>&nbsp;</p>

<p>Here&rsquo;s the Github&nbsp;<a href="https://github.com/sulthanallaudeen/PHP-MySQL-i-All-in-One" target="_blank">Link&nbsp;</a></p>
',
'date' => '2015-06-15 19:44:26',
'status' => 1,
'created_at' => '2015-09-30 13:05:07',
'updated_at' => '2015-10-05 22:54:52',
),
8 => 
array (
'id' => 9,
'title' => 'Got 5k Reputation in Stackoverflow ',
'url' => 'Got-5k-Reputation-in-Stackoverflow',
'content' => '<p>And this day (24th May 2015) I crossed 5000k Reputation in Stackoverflow. I feel really happy and i know it is not even a matter a there are many who got reputatoin Lakhs . However they are 6 years senior and i just got 1.</p>

<p>&nbsp;</p>

<p>As an update here is the Screenshot which would be fun if i see this in future.</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/05/so1.png"><img alt="so" class="img-thumbnail" src="../images/blog/StackOverflor5k.png" style="height:620px; width:1344px" /></a></p>

<p>&nbsp;</p>
',
'date' => '2015-06-18 21:44:26',
'status' => 1,
'created_at' => '2015-09-30 13:07:17',
'updated_at' => '2015-10-05 22:55:03',
),
9 => 
array (
'id' => 10,
'title' => 'How to Install Illuminate  HTML In Laravel 5 ',
'url' => 'How-to-Install-Illuminate-HTML-In-Laravel-5-',
'content' => '<p>This post is because</p>

<p>I can able to see many users stuck up with installing&nbsp;<strong>illuminate/HTML</strong>&nbsp;Form helpers in&nbsp;<strong>Laravel 5</strong>.</p>

<p>In the previous version this helper comes by default, as a measure of making the Framework less size, they wanted the users to install this by themselves.</p>

<p>Here are the steps to Install illuminate/HTML Form Helpers in Laravel5</p>

<p>&nbsp;</p>

<p><strong>Step 1 :&nbsp;</strong></p>

<p>Navigate to your project folder using composer run the following query</p>

<pre>
composer require &quot;illuminate/html&quot;:&quot;5.0.*&quot;</pre>

<p><strong>Step 2 :&nbsp;</strong>Open the&nbsp;<strong>app.php&nbsp;</strong>file and add the below service providers</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
&#39;providers&#39; =&gt; [
...
&#39;Illuminate\\Html\\HtmlServiceProvider&#39;,
]
&#39;aliases&#39; =&gt; [
&#39;Form&#39;=&gt; &#39;Illuminate\\Html\\FormFacade&#39;, 
&#39;HTML&#39;=&gt; &#39;Illuminate\\Html\\HtmlFacade&#39;,
]   </pre>
</div>

<p>Now,&nbsp;it&lsquo;s&nbsp;all&nbsp;set.&nbsp;You&nbsp;can&nbsp;check&nbsp;it&nbsp;by&nbsp;For&nbsp;css&nbsp; and Js By&nbsp;:</p>

<pre>
{!! HTML::style(&#39;css/style.css&#39;) !!}
{!! HTML::script(&#39;js/script.js&#39;); !!}</pre>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
'date' => '2015-06-20 04:34:26',
'status' => 1,
'created_at' => '2015-09-30 13:09:51',
'updated_at' => '2015-10-16 10:05:56',
),
10 => 
array (
'id' => 11,
'title' => 'How to Install latest version of Laravel ',
'url' => 'How-to-Install-latest-version-of-Laravel',
'content' => '<p><a href="http://laravel.com/docs/5.0" target="_blank">Here</a>&nbsp;is the Master Source &nbsp;where you can get it with more details, But let me give the lazy way which i follow</p>

<p><strong>Step 1 :</strong></p>

<p>Download&nbsp;<a href="https://getcomposer.org/" target="_blank">Composer</a>&nbsp;here&rsquo;s the window&rsquo;s&nbsp;<a href="https://getcomposer.org/Composer-Setup.exe" target="_blank">direct link</a></p>

<p><strong>Step 2 :&nbsp;</strong></p>

<p>Navigate to the folder where you need to install laravel</p>

<pre style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);">
composer create-project laravel/laravel</pre>

<p>The above command will directly install you the latest Laravel Framework</p>
',
'date' => '2015-06-21 05:44:06',
'status' => 1,
'created_at' => '2015-09-30 13:11:21',
'updated_at' => '2015-09-30 13:11:21',
),
11 => 
array (
'id' => 12,
'title' => 'Remove public  index.php from your Laravel Project in two steps ',
'url' => 'Remove-public-index.php-from-your-Laravel-Project-in-two-steps-',
'content' => '<p>Here&rsquo;s the Simple 2 step way step &nbsp;to remove the&nbsp;<strong>pubic/index.php&nbsp;</strong>&nbsp;from your laravel project which gives you pretty url</p>

<p><strong>Step 1 :</strong></p>

<p>Rename the file&nbsp;<strong>server.php</strong>&nbsp;to&nbsp;<strong>index.php</strong>&nbsp;in your project root folder</p>

<p><strong>Step 2 :&nbsp;</strong></p>

<p>Move the&nbsp;<strong>.htaccess</strong>&nbsp;file from your&nbsp;<strong>public</strong>&nbsp;folder to root folder</p>
',
'date' => '2015-06-24 02:24:06',
'status' => 1,
'created_at' => '2015-09-30 13:11:48',
'updated_at' => '2015-09-30 15:55:07',
),
12 => 
array (
'id' => 13,
'title' => 'Multiplication of Time in PHP ',
'url' => 'Multiplication-of-Time-in-PHP',
'content' => '<p>Today i crossed across a Question about Multiplying a Time using PHP Here&rsquo;s the&nbsp;<a href="http://stackoverflow.com/q/30555665/3282633" target="_blank">Link</a></p>

<p>After a small research 5 minutes i wrote the&nbsp;<a href="http://stackoverflow.com/a/30555780/3282633" target="_blank">answer</a></p>

<p>Here is what you should do</p>

<p><strong>Step 1 :</strong>&nbsp;Convert your hours into seconds</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
<code>$seconds = strtotime(&quot;1970-01-01 $maritime UTC&quot;)</code></pre>
</div>

<p><strong>Step 2 :</strong>&nbsp;Multiply it directly</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
<code>$multiply = $seconds * 5;</code></pre>
</div>

<p><strong>Step 3 :</strong>&nbsp;Convert the seconds back to hours, And you&rsquo;re done !</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
<code>echo gmdate(&quot;d H:i:s&quot;,$multiply);</code></pre>
</div>

<p>So Your final code shall be</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
<code>&lt;?php
$maritime =&#39;01:10:00&#39;;
$seconds = strtotime(&quot;1970-01-01 $maritime UTC&quot;);
$multiply = $seconds * 5;  #Here you can multiply with your dynamic value
echo gmdate(&quot;d H:i:s&quot;,$multiply);</code></pre>
</div>

<p>And Everything goes, ok.. After few minutes the OP commented me, &ldquo;If i Multiply 25 times&rdquo; then he can&rsquo;t able to get the expected output. When i test i found that the gmdate gives the ouput like 1 day xx hours xx minutes and xx seconds Mean while the User&nbsp;<a href="http://stackoverflow.com/users/3933332/rizier123" target="_blank">Rizer</a>&nbsp;question me with this&nbsp;<a href="https://eval.in/373221" target="_blank">link</a>, that the OP seems to get the answer in raw time, Then again i started the research and ended with the code which is made upon DateTime</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
<code>&lt;?php
$maritime =&#39;01:10:00&#39;;
$seconds = strtotime(&quot;1970-01-01 $maritime UTC&quot;);
$multiply = $seconds * 25;  #Here you can multiply with your dynamic value
$seconds = $multiply;
$zero    = new DateTime(&quot;@0&quot;);
$offset  = new DateTime(&quot;@$seconds&quot;);
$diff    = $zero-&gt;diff($offset);
echo sprintf(&quot;%02d:%02d:%02d&quot;, $diff-&gt;days * 24 + $diff-&gt;h, $diff-&gt;i, $diff-&gt;s);
?&gt;</code></pre>
</div>

<p>Here are the Eval&nbsp;<a href="https://eval.in/373216" target="_blank">Link1</a>&nbsp;and&nbsp;<a href="https://eval.in/373224" target="_blank">Link2</a></p>
',
'date' => '2015-06-26 03:13:36',
'status' => 1,
'created_at' => '2015-09-30 13:26:10',
'updated_at' => '2015-09-30 13:26:10',
),
13 => 
array (
'id' => 14,
'title' => 'GoogleMapsApi – Initial Release ',
'url' => 'GoogleMapsApi-–-Initial-Release',
'content' => '<p>And Today i launched the GoogleMapsApi with minimal calls to Google Api in the app part of the Sysaxiom&rsquo;s app Place. i.e.,&nbsp;<a href="http://sysaxiom.com/apps" target="_blank">sysaxiom.com/apps</a></p>

<p>For the Initial Release i have used the minimal calls</p>

<p>It was designed with the latest pack of&nbsp;<a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3.4</a>&nbsp;and in the Backend with PHP. However i plan to use some other additional calls in the future days.</p>

<p>Here&rsquo;s the&nbsp;<a href="https://github.com/sulthanallaudeen/GoogleMapsApi" target="_blank">Github Link</a></p>

<p>Thanks for all.</p>
',
'date' => '2015-06-28 06:34:04',
'status' => 1,
'created_at' => '2015-09-30 13:26:45',
'updated_at' => '2015-10-16 10:09:15',
),
14 => 
array (
'id' => 15,
'title' => 'Background Tracker – How I made it myself ',
'url' => 'Background-Tracker-–-How-I-made-it-myself',
'content' => '<p>Last Night i made a task by myself for one of my work, To track the details of users who attempts to login the admin panel. I plan to get the basic details such as Operating System, Ip Address, Browser Details and trigger to the List of Admin who are listed.</p>

<p><strong>Step 1 :&nbsp;</strong></p>

<p>To get the basic details of the Users&rsquo;s which i listed above, i &nbsp;used the following script (Which gained me several rep in Stackoverflow in the beginning days)</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<p>function GetDetails()<br />
{<br />
$u_agent = $_SERVER[&#39;HTTP_USER_AGENT&#39;];<br />
$bname = &#39;Unknown&#39;;<br />
$platform = &#39;Unknown&#39;;<br />
$version= &quot;&quot;;</p>

<p>//First get the platform?<br />
if (preg_match(&#39;/linux/i&#39;, $u_agent)) {<br />
$platform = &#39;linux&#39;;<br />
}<br />
elseif (preg_match(&#39;/macintosh|mac os x/i&#39;, $u_agent)) {<br />
$platform = &#39;mac&#39;;<br />
}<br />
elseif (preg_match(&#39;/windows|win32/i&#39;, $u_agent)) {<br />
$platform = &#39;windows&#39;;<br />
}</p>

<p>// Next get the name of the useragent yes seperately and for good reason<br />
if(preg_match(&#39;/MSIE/i&#39;,$u_agent) &amp;&amp; !preg_match(&#39;/Opera/i&#39;,$u_agent))<br />
{<br />
$bname = &#39;Internet Explorer&#39;;<br />
$ub = &quot;MSIE&quot;;<br />
}<br />
elseif(preg_match(&#39;/Firefox/i&#39;,$u_agent))<br />
{<br />
$bname = &#39;Mozilla Firefox&#39;;<br />
$ub = &quot;Firefox&quot;;<br />
}<br />
elseif(preg_match(&#39;/Chrome/i&#39;,$u_agent))<br />
{<br />
$bname = &#39;Google Chrome&#39;;<br />
$ub = &quot;Chrome&quot;;<br />
}<br />
elseif(preg_match(&#39;/Safari/i&#39;,$u_agent))<br />
{<br />
$bname = &#39;Apple Safari&#39;;<br />
$ub = &quot;Safari&quot;;<br />
}<br />
elseif(preg_match(&#39;/Opera/i&#39;,$u_agent))<br />
{<br />
$bname = &#39;Opera&#39;;<br />
$ub = &quot;Opera&quot;;<br />
}<br />
elseif(preg_match(&#39;/Netscape/i&#39;,$u_agent))<br />
{<br />
$bname = &#39;Netscape&#39;;<br />
$ub = &quot;Netscape&quot;;<br />
}</p>

<p>// finally get the correct version number<br />
$known = array(&#39;Version&#39;, $ub, &#39;other&#39;);<br />
$pattern = &#39;#(?&#39; . join(&#39;|&#39;, $known) .<br />
&#39;)[/ ]+(?[0-9.|a-zA-Z.]*)#&#39;;<br />
if (!preg_match_all($pattern, $u_agent, $matches)) {<br />
// we have no matching number just continue<br />
}</p>

<p>// see how many we have<br />
$i = count($matches[&#39;browser&#39;]);<br />
if ($i != 1) {<br />
//we will have two since we are not using &#39;other&#39; argument yet<br />
//see if version is before or after the name<br />
if (strripos($u_agent,&quot;Version&quot;) &lt; strripos($u_agent,$ub)){<br />
$version= $matches[&#39;version&#39;][0];<br />
}<br />
else {<br />
$version= $matches[&#39;version&#39;][1];<br />
}<br />
}<br />
else {<br />
$version= $matches[&#39;version&#39;][0];<br />
}</p>

<p>// check if we have a number<br />
if ($version==null || $version==&quot;&quot;) {$version=&quot;?&quot;;}</p>

<pre>
return array(
&#39;userAgent&#39; =&gt; $u_agent,
&#39;name&#39; =&gt; $bname,
&#39;version&#39; =&gt; $version,
&#39;platform&#39; =&gt; $platform,
&#39;pattern&#39; =&gt; $pattern
);
}</pre>
</div>

<p>It can be invoked easily by&nbsp;function GetDetails(),</p>

<p>To make it simple i am assigning it inside an array i.e.,</p>

<pre>
$Fetch = function GetDetails();</pre>

<p>Now I can fetch those details by</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
$Fetch[&#39;name&#39;];
$Fetch[&#39;version&#39;];
$Fetch[&#39;platform&#39;];
$_SERVER[&#39;REMOTE_ADDR&#39;];</pre>
</div>

<p><strong>Note :&nbsp;</strong></p>

<p>The naming&nbsp;conventions&nbsp;can be&nbsp;changed&nbsp;according to the need.</p>

<p><strong>Step 2 :&nbsp;</strong></p>

<p>To construct the Email that is to be fired</p>

<p>Constructing the&nbsp;Body</p>

<pre>
$Sub = &quot;User : <strong>&quot;.get_current_user().&#39;</strong> accessed the Admin Panel.
Here are the Details 
&#39;;
$Sub .= &#39;Browser Name : &#39;.$Fetch[&#39;name&#39;].&#39;
&#39;;
$Sub .= &quot;Browser Version : &quot;.$Fetch[&#39;version&#39;].&#39;
&#39;;
$Sub .= &quot;User Operating System : &quot;.$Fetch[&#39;platform&#39;].&#39;
&#39;;
$Sub .= &quot;IP Address : &quot;.$_SERVER[&#39;REMOTE_ADDR&#39;].&#39;
&#39;;</pre>

<p>Constructing the Headers</p>

<pre>
$headers= &quot;From: Kohlipe Travelers \\r\\n&quot;;
$headers.= &quot;Reply-To: The Reply To Name \\r\\n&quot;;
$headers.= &quot;X-Mailer: PHP/&quot; . phpversion().&quot;\\r\\n&quot;;
$headers.= &quot;MIME-Version: 1.0&quot; . &quot;\\r\\n&quot;;
$headers.= &quot;Content-type: text/html; charset=iso-8859-1\\r\\n&quot;;</pre>

<p>Then to fire we can the below static way</p>

<pre>
mail(&#39;yourmail@yourdomain.com&#39;, &#39;Subject Regarding Accesss&#39;, $Sub, $headers, &#39;sysaxiom.com&#39;);</pre>

<p>or to achieve the list of subscribed admin,</p>

<p><strong>Step 3 :</strong></p>

<p>Establish the DB Connection</p>

<pre>
$mysqli = new mysqli(&quot;localhost&quot;, &quot;root&quot;, &quot;pass&quot;, &quot;dbname&quot;);
if (mysqli_connect_errno()) {
echo mysqli_connect_error();
exit();
}</pre>

<p>Now i can use the variable $mysqli for all my DB Activities,</p>

<p>Following up,</p>

<p>Now getting all the lists and firing using the simple foreach loop</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
$query = &quot;SELECT * FROM email_notify&quot;;

if ($results = $mysqli-&gt;query($query))
{</pre>

<pre>
while ($row = $results-&gt;fetch_assoc())
{
mail($row[&#39;email&#39;], &#39;Subject Regarding Access&#39;, $Sub, $headers, &#39;sysaxiom.com&#39;);
}
$results-&gt;free();
}</pre>
</div>

<p>&nbsp;</p>

<p>And now i have iterated all the lists inside the foreach loop which will fire itself the mail who are listed in the email_notify table.</p>

<p>The same above function can be used for the Illegal Access, in addition the subject and important priority can be changed accordingly.</p>

<p>And it was done&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
'date' => '2015-07-01 20:44:06',
'status' => 1,
'created_at' => '2015-09-30 13:30:45',
'updated_at' => '2015-10-05 22:58:11',
),
15 => 
array (
'id' => 16,
'title' => 'How non-recommendation helped me ;) ',
'url' => 'How-non-recommendation-helped-me-;)',
'content' => '<p>Previous day i had a which deals with some no sense.</p>

<p>I was working on a admin panel which is fully made of Bootstrap and rich set of its native date, time picker and its own entities. At the same time for the front / user end panel I was given a&nbsp;paid template from theme forest and it had a loads of features with proper documentation in it.</p>

<p>The guy i was working with wanted to have one of the element (Time Picker) like the below given screen</p>

<p><img alt="" class="img-thumbnail" src="../images/blog/traveler-template-timer.png" style="height:210px; width:330px" /></p>

<p>The only difficulty to have this in admin panel is because of the several conflicts araised from the admin panel, I really don&rsquo;t have enough time to fix these conflicts (and i am already having multiple jquery functions inside my page). The situation i want to have the feature without disturbing my working within a certain period of time (say 30 min). So i planned to use the (poor) iframe to have that feature.</p>

<p>What i did is i filtered all the css, js files required for the targeted time picker and made a minified version which results in 17 kb ~ . This was not a big deal to load inside a frame,</p>

<p>As a default property of iframe&nbsp;<strong>scrolling=&rdquo;no&rdquo; frameborder=&rdquo;0&Prime;&nbsp;</strong>&nbsp;and then i wanted to get the frame&rsquo;s value while submitting as i don&rsquo;t want to complex to set the value via ajax call on change of the frame&rsquo;s element.</p>

<p>Then what i did was, i planned to get the value of the frame&rsquo;s element while submitting by identifying the frame&rsquo;s name and element&rsquo;s name.</p>

<p>It is achieved by</p>

<pre>
var target = $(&#39;iframe[name=select_frame]&#39;).contents().find(&#39;#select_name&#39;).val();</pre>

<p>In the above code,&nbsp;<strong>select_frame&nbsp;</strong>&nbsp;is the frame&rsquo;s name and&nbsp;<strong>select_name&nbsp;</strong>&nbsp;is the element&rsquo;s name inside the frame and it was assigned to the variable&nbsp;<strong>target&nbsp;</strong>&nbsp;inside my frame.</p>

<p>Then i wanted to send all those values to another page by jquery ajax call, if i get each element&rsquo;s value by id it would not at all a deal, as i already to form serialize i wanted to add this element towards the value of the form to the target page.</p>

<p>So, Here is the simple workaround</p>

<pre>
data : $(&quot;#allocateboat&quot;).serialize()+&#39;&amp;element=&#39;+target,</pre>

<p>What i did is just added the element along the form serialized value and it was done&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>
',
'date' => '2015-07-03 21:34:06',
'status' => 1,
'created_at' => '2015-09-30 13:32:16',
'updated_at' => '2015-09-30 15:53:46',
),
16 => 
array (
'id' => 17,
'title' => 'Encourage one to make it Better ! ',
'url' => 'Encourage-one-to-make-it-Better-!',
'content' => '<p>Encourage one to Make it Better !!</p>

<p>This is really a true one and it is experienced by me today.</p>

<p>These days, i am getting encouraged through several comments in&nbsp;<a href="http://stackoverflow.com/" target="_blank">Stackoverflow</a>&nbsp;(Though a very less), but i do respect for every comment that belongs me (and for the one i deserve for).</p>

<p>&nbsp;</p>

<p>Already i was get sparked by few of the comments, encouragements and good peoples. (I shall list those peoples in another post).</p>

<p><strong>2 Best Incidents</strong>&nbsp;that sparked me a lot today,</p>

<p>I got inspired to the simple and awesome combination of the JQuery + Php, that resulted in trying &nbsp;some workouts myself in hand written codes.</p>

<p><strong>1st Incident</strong></p>

<p>While posting answer for&nbsp;<a href="http://stackoverflow.com/q/30886356/3282633" target="_blank">this Question</a>&nbsp;i find little hard for Simple PDO Operation which binds with a parameter. Though i find many codes around i don&rsquo;t find satisfied with those lines.</p>

<p>So, I plan to have something which would save time and they are smart enough.</p>

<p>Which resulted in Creating a Repo named as&nbsp;<a href="https://github.com/sulthanallaudeen/Micro-Life-Saver" target="_blank">Micro Life Saver</a>. Here i plan to have some power code that does everything. Here i shall add some more Life Saver in future</p>

<p><strong>Note :</strong>&nbsp;I already have a kid named as&nbsp;<a href="https://github.com/sulthanallaudeen/PHP-MySQL-i-All-in-One" target="_blank">PHP-MySQL(i) All in One</a></p>

<p><strong>2nd Incident</strong></p>

<p>Today one of my colleague dev asked a doubt which is related to a simple ajax call (which i love a lot these days), for that i wanted to see Mr.G and Mr.SO to fetch some segments (which i really not want to do for such a thing). Once i proposed the logic i can able to see the awesomeness with the dev. But if i have that in a hand-made it would have some additional awesomeness to myself.</p>

<p>So, I plan to have some post which i would really do it hand-made with explanation for basics which would surely make more expertise.</p>

<p>[Ahm, I can find english dies a little here, however i will save it too&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" />&nbsp;]</p>

<p><em>Cheer&rsquo;s for the time ahead !!</em></p>
',
'date' => '2015-07-07 00:44:56',
'status' => 1,
'created_at' => '2015-09-30 13:32:44',
'updated_at' => '2015-10-16 10:09:36',
),
17 => 
array (
'id' => 18,
'title' => 'How Cute the Jquery is ! With Basic Operation which is lovable – Short Version ',
'url' => 'How-Cute-the-Jquery-is-!-With-Basic-Operation-which-is-lovable-–-Short-Version',
'content' => '<p>Hello, Guys.</p>

<p>We all know the importance of&nbsp;<strong>JQuery</strong>&nbsp;(though Angular rocks). I can say that JQuery is the step one should learn to have his things done.</p>

<p>Trust me, its simple like air / i can assure that you will love the way i explain you(might be little childish).</p>

<p>The simple step i would say is like this</p>

<p><strong>1. Include the Library</strong></p>

<pre>
&lt;script src=&quot;sysaxiom.com/api/jquery.min.js&gt;&lt;/script&gt;</pre>

<p><strong>2. Define the Input</strong></p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;div id=&#39;&#39;MyTrigger&quot;&gt;&lt;/div&gt;</div>

<p>&nbsp;</p>

<p><strong>3. Detect the Input Action &ndash; Trigger</strong></p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<pre>
&lt;script&gt;
$(&quot;#MyTrigger&quot;).click(function(){  //Here we can assure that that id with MyTrigger is clicked  })
&lt;/script&gt;?
</pre>
</div>

<p><strong>4. Do some operation for Input&nbsp;</strong></p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">console.log(&quot;Boss !!! We got the Input&quot;);</div>

<p><strong>5. Define the Output</strong></p>

<pre>
&lt;div id=&quot;MyResult&quot;&gt;&lt;/div&gt;</pre>

<p><strong>6. Show your Output&nbsp;</strong></p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">$(&quot;#MyResult&quot;).html(&quot;MyTrigger is Clicked&quot;);</div>

<p><strong>Fiddle Created for This Demo</strong></p>

<p><strong>1.&nbsp;Console Output &ndash;</strong></p>

<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/jqq1kdon/embedded/" width="100%"></iframe></p>

<p>&nbsp;</p>

<p><strong>2. HTML Output &ndash;</strong></p>

<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/4712v36u/embedded/" width="100%"></iframe></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
'date' => '2015-07-09 00:44:12',
'status' => 1,
'created_at' => '2015-09-30 14:09:35',
'updated_at' => '2015-09-30 14:09:35',
),
18 => 
array (
'id' => 19,
'title' => 'How Cute the Jquery is ! With Basic Operation which is lovable – Story Version ',
'url' => 'How-Cute-the-Jquery-is-!-With-Basic-Operation-which-is-lovable-–-Story-Version',
'content' => '<p>Hello, Guys.</p>

<p>We all know the importance of&nbsp;<strong>JQuery</strong>&nbsp;(though Angular rocks). I can say that JQuery is the step one should learn to have his things done.</p>

<p>Trust me, its simple like air / i can assure that you will love the way i explain you(might be little childish).</p>

<p>The simple step i would say is like this</p>

<p><strong>1. Include the Library</strong></p>

<p><strong>2. Define the Input</strong></p>

<p><strong>3. Detect the Input Action &ndash; Trigger</strong></p>

<p><strong>4. Do some operation for Input&nbsp;</strong></p>

<p><strong>5. Define the Output</strong></p>

<p><strong>6. Show your Output&nbsp;</strong></p>

<p>All the steps can be a single line or more</p>

<p>Let&rsquo;s Begin</p>

<p><strong>Step 1 :&nbsp;</strong></p>

<p><strong>&nbsp; &nbsp; &nbsp;Include the Library</strong></p>

<p>Why include ?</p>

<p>Because you don&rsquo;t want to write the basic function.</p>

<p>Do you want to do write your own ?</p>

<p>Then</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<p>&lt;script&gt;</p>

<p>Write all your Basic-Mid-Hard functions here</p>

<p>&lt;/script&gt;</p>
</div>

<p>Else, Your want to be&nbsp;<strong>Smart enough ?</strong></p>

<p>Then just include the Library in a single line</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;script scr=&quot;library.js&quot;&gt;&lt;/script&gt;</div>

<p>The&nbsp;<em>library.js</em>&nbsp;is the file which is written by some good folks, It would have some hundreds of functions</p>

<p>You can include it directly by globally available CDN or download it from there&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>

<p>I too provide something&nbsp;<a href="http://www.sysaxiom.com/api/jquery.min.js" target="_blank">http://www.sysaxiom.com/api/jquery.min.js</a></p>

<p>So, Inclusion of the library could be in a single line as i said</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;script src=&quot;sysaxiom.com/api/jquery.min.js&gt;&lt;/script&gt;</div>

<p><strong>Step&nbsp;2 :</strong></p>

<p><strong>&nbsp; &nbsp; &nbsp;Define the Input</strong></p>

<p>You can define the input / refer the input by some&nbsp;<strong>id</strong>&nbsp;or&nbsp;<strong>class</strong></p>

<p>Define by id could be Something like</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<p>&lt;input type=&quot;text&quot; id=&quot;MyInput&quot;&gt;</p>

<p>or</p>

<p>&lt;div id=&quot;MyInput&quot;&gt;</p>

<p>or</p>

<p>Option Select or Radio Button or Checkbox or Submit or anything you wish</p>
</div>

<p>Define by class could be Something like</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<p>&lt;input type=&quot;text&quot; class=&quot;MyInput&quot;&gt;</p>

<p>or</p>

<p>&lt;div class=&quot;MyInput&quot;&gt;</p>

<p>or</p>

<p>Option Select or Radio Button or Checkbox or Submit or anything you wish</p>
</div>

<p>So, coming to the point. Defining the input it would be</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;div id=&#39;&#39;MyTrigger&quot;&gt;&lt;/div&gt;</div>

<p><strong>Step 3 :</strong></p>

<p><strong>&nbsp; &nbsp; &nbsp;Detect the Input Action &ndash; Trigger</strong></p>

<p>You can detect the Input Action, Really many actions are there</p>

<p>Like&nbsp;<strong>Click, Change, Hover, MouseIn, MouseOut</strong>&nbsp;and loads</p>

<p>Let&rsquo;s detect the input with the click action</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<p>&lt;script&gt;</p>

<p>$(&quot;#MyTrigger&quot;).click(function(){ &nbsp;//Here we can assure that that id with MyTrigger is clicked &nbsp;})</p>

<p>&lt;/script&gt;</p>
</div>

<p><strong>Step 4 :</strong></p>

<p><strong>&nbsp; &nbsp; Do some operation for Input&nbsp;</strong></p>

<p>What Operation shall we do at this time ???</p>

<p>Anything that you like</p>

<p>Basic &ndash;&nbsp;<em>Do some 1+1 or simply smile</em></p>

<p>Mid &ndash;&nbsp;<em>Do some ajax call</em></p>

<p>Exp &ndash;&nbsp;<em>I really don&rsquo;t know, it can be anything that you wish</em></p>

<p>Ahm, Let&rsquo;s say what happened i.e., Input is received</p>

<p>It can be said by</p>

<p><strong>Developer&rsquo;s Way</strong>&nbsp;&ndash; Console or&nbsp;<strong>People&rsquo;s Way</strong>&nbsp;&ndash; Towards the html page</p>

<p>Note : If we follow the first one, we don&rsquo;t wan&rsquo;t to define the output or show output as we are outputting the information in the place which is already defined.</p>

<p>It is not a big deal, just a single line as i said.</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">console.log(&quot;Boss !!! We got the Input&quot;);</div>

<p><strong>5. Define the Output</strong></p>

<p>If you are at this step then it is sure that you want to know/follow the People&rsquo;s way</p>

<p>Here&rsquo;s how we Define the Output Section</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;div id=&quot;MyResult&quot;&gt;&lt;/div&gt;</div>

<p><strong>6. Show your Output&nbsp;</strong></p>

<p>And Showing the output toward html is as simple like this</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">$(&quot;#MyResult&quot;).html(&quot;MyTrigger is Clicked&quot;);</div>

<p><strong>Fiddle Created for This Demo</strong></p>

<p><strong>1.&nbsp;Console Output &ndash;</strong></p>

<p>&nbsp;</p>

<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/jqq1kdon/embedded/" width="100%"></iframe></p>

<p><strong>2. HTML Output &ndash;</strong></p>

<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/4712v36u/embedded/" width="100%"></iframe></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
'date' => '2015-07-11 02:34:33',
'status' => 1,
'created_at' => '2015-09-30 14:18:57',
'updated_at' => '2015-09-30 14:18:57',
),
19 => 
array (
'id' => 20,
'title' => 'How to install Laravel Older Versions through Composer ',
'url' => 'How-to-install-Laravel-Older-Versions-through-Composer',
'content' => '<p>How to install Laravel Older Versions through Composer</p>

<p>Today, While I want to do some reseach with Laravel 5.0, I can&rsquo;t able to download it in the default way</p>

<p>i.e.,</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">composer create-project laravel/laravel</div>

<p>It will install the latest stable version.</p>

<p>Then I found that, If someone want to install a specific version (say 4.2), then</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">composer create-project laravel/laravel YourAwesomeFolder 4.2</div>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
'date' => '2015-08-03 00:44:26',
'status' => 1,
'created_at' => '2015-09-30 14:20:41',
'updated_at' => '2015-09-30 14:20:41',
),
20 => 
array (
'id' => 21,
'title' => 'Tricky File Upload, List and Delete ',
'url' => 'Tricky-File-Upload,-List-and-Delete',
'content' => '<p>I got a &nbsp;mate named as&nbsp;<a href="http://stackoverflow.com/users/4842333/luigi" target="_blank">Luigi</a>&nbsp;who asked a question about uploading the files using php. I can understand that there few mistakes in his code and i helped him to complete it which extends to listing the files inside the sub directory,</p>

<p>&nbsp;</p>

<p>And today he needs to delete those files &nbsp;which looks a good snacks for me. So i gave him a little brief answer which i don&rsquo;t want to repeat it again here.</p>

<p>Here&rsquo;s the&nbsp;<a href="http://stackoverflow.com/q/31232594/3282633" target="_blank">Question</a>&nbsp;and&nbsp;<a href="http://stackoverflow.com/a/31234250/3282633">Answer</a></p>

<p>Here&rsquo;s the&nbsp;<a href="https://eval.in/393049" target="_blank">Eval of the Code</a>&nbsp;Here&rsquo;s the updated&nbsp;<a href="http://jsfiddle.net/allaudeen/rrpbuov2/" target="_blank">Fiddle</a>&nbsp;(Updated on 14th July 2015)</p>
',
'date' => '2015-08-07 01:34:28',
'status' => 1,
'created_at' => '2015-09-30 14:21:32',
'updated_at' => '2015-10-16 10:10:04',
),
21 => 
array (
'id' => 22,
'title' => 'Strange behaviour of Laravel Sessions and How I overcome it. ',
'url' => 'Strange-behaviour-of-Laravel-Sessions-and-How-I-overcome-it.',
'content' => '<p>I recently met a strange behaviour from laravel where i am getting logged out in certain minutes, though i have set the expiration of the session<br />
for a very long time.</p>

<p>Few of my office mates (Mr.Manoj) and other suffered the same issue recently.</p>

<p>To handle it, I tried to follow the bad practise of setting the user id in&nbsp;<a href="http://jsfiddle.net/allaudeen/g7hxxp2g/" target="_blank">local storage</a>&nbsp;and getting it each time.</p>

<p>Then i planned to overcome in some legal hacks,</p>

<p>After few close analysis of browser i noted that laravel is creating a session named as &lsquo;laravel_session&rsquo; in evrey login and destroying<br />
it the same in logout.</p>

<p>I just made the simple hack</p>

<p><strong>Step 1 :</strong></p>

<p>Open the session handler file.</p>

<p>It should be under config-&gt;session.php</p>

<p><strong>Step 2 :</strong></p>

<p>Renamed the name &lsquo;laravel_session&rsquo; to my project name</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&#39;cookie&#39; =&gt; &#39;bizarrechat_laravel_session&#39;,</div>

<p>And the Problem was solved !!</p>

<p>So, It will create the session with suffix to project name.</p>

<p><strong>Note :</strong>&nbsp;You can dig the source file to explore a bit more</p>
',
'date' => '2015-08-23 03:26:17',
'status' => 1,
'created_at' => '2015-09-30 14:22:25',
'updated_at' => '2015-10-16 10:10:13',
),
22 => 
array (
'id' => 23,
'title' => 'My First Cross Origin Script ',
'url' => 'My-First-Cross-Origin-Script',
'content' => '<p>Today i found a cool personal website and i was really wondered with the design, While seeing the other pages, i found that the admin used ajax calls for the testimonial kind of section, after digging the console i found that it was unsecured ajax call.</p>

<p>&nbsp;</p>

<p>I tried to post the data from form and it worked, then i posted via to&nbsp;<a href="https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?hl=en" target="_blank">postman client</a>&nbsp;and post suceeded.</p>

<p>Then i collected the address, and form attributes and methods and planed to attempt the call with yet another simple call of my own.</p>

<p>&nbsp;</p>

<p><strong>Amazing it worked</strong>, then i planned to have post with iteration, I planned with 10 and then tried with some big numbers,</p>

<p>&nbsp;</p>

<p>I got all the responses posted and then the target user got&nbsp;<strong>Internal Server Error&nbsp;</strong>&nbsp;in another few minutes, then throw error -&gt; exceeded maximum connections.</p>

<p>&nbsp;</p>

<p>Here&rsquo;s the code that i tried with</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<p>&nbsp;</p>
</div>

<p><strong>Moral :&nbsp;</strong></p>

<p><em><strong>Never believe anonymous users !</strong></em></p>
',
'date' => '2015-08-28 21:46:17',
'status' => 1,
'created_at' => '2015-09-30 14:23:14',
'updated_at' => '2015-10-16 10:10:21',
),
23 => 
array (
'id' => 24,
'title' => 'Recommendation of Crayon Syntax Highlighter ',
'url' => 'Recommendation-of-Crayon-Syntax-Highlighter',
'content' => '<p>So far for all the codes that were embedded i have used&nbsp;<a href="https://wordpress.org/plugins/syntaxhighlighter/" target="_blank">SyntaxHighlighter</a>&nbsp;where i found so many difficulties and after using the&nbsp;<a href="https://github.com/aramk/crayon-syntax-highlighter" target="_blank">Crayon Syntax Highlighter</a>&nbsp;i really feel good and it makes many things easier. I recommend this plugin to use if you deal with the combination wordpress + code</p>
',
'date' => '2015-09-01 00:01:41',
'status' => 1,
'created_at' => '2015-09-30 14:24:17',
'updated_at' => '2015-10-16 10:10:28',
),
24 => 
array (
'id' => 25,
'title' => 'Is goto in PHP Evil ',
'url' => 'Is-goto-in-PHP-Evil',
'content' => '<p>I really know that i am mad lover of goto, but i really wonder why many of the people hate it (Even many of my office mates).</p>

<p>&nbsp;</p>

<p>But i always use to tell them that it is like a knife and it depends on how we use it. It&rsquo;s upto you to cut the finger of cut the fruit.</p>

<p>Today i found a&nbsp;<a href="http://stackoverflow.com/q/1900017/3282633" target="_blank">post in Stackoverflow</a>&nbsp;which took my time a little bit.</p>

<p>I read all the answer and comments where this comment made me to read it thrice.</p>

<p><img alt="" src="http://i.imgur.com/lc48ATo.png" style="height:400px; width:711px" /></p>

<p>Here&rsquo;s the Featured Cartoon from php.net</p>

<p>&nbsp;</p>

<p><img alt="" src="http://i.imgur.com/15SuOW9.png" style="height:201px; width:740px" /></p>

<p>&nbsp;</p>

<p>BUT I DO ALWAYS LOVE&nbsp;<strong><a href="http://php.net/manual/en/control-structures.goto.php" target="_blank">GOTO</a></strong></p>
',
'date' => '2015-09-02 23:26:41',
'status' => 1,
'created_at' => '2015-09-30 14:24:47',
'updated_at' => '2015-10-16 10:10:35',
),
25 => 
array (
'id' => 26,
'title' => 'Plan for Task Scheduler ',
'url' => 'Plan-for-Task-Scheduler',
'content' => '<p>After few Projects and little House-Keeping works i have a plan to develop a Task Scheduler in Laravel 5 and AngularJS. Let me fork and convey the other details in following posts !</p>

<p>&nbsp;</p>

<p>Cheers&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>
',
'date' => '2015-09-09 21:26:12',
'status' => 1,
'created_at' => '2015-09-30 14:25:10',
'updated_at' => '2015-10-05 23:05:07',
),
26 => 
array (
'id' => 27,
'title' => 'How to create App in Heroku in 4 Steps ',
'url' => 'How-to-create-App-in-Heroku-in-4-Steps',
'content' => '<p>I was wondering and trying to make use of Heroku since my days in Vel Tech where i attempted to build some<br />
facebook application. However i can&rsquo;t able to make it work more than sign-up :P. After seeing some good friends<br />
making use of it I then plan to Utilize it and succeded.</p>

<p>Here i will say How to make use of it in simple steps</p>

<p><strong>Step 1 :</strong>&nbsp;<a href="https://github.com/new" target="_blank">Create a Github Repo</a>&nbsp;and then Open&nbsp;<a href="https://www.heroku.com/" target="_blank">Heroku</a>&nbsp;, then make a Register and Login to your Account, and try reading&nbsp;<a href="https://devcenter.heroku.com/articles/getting-started-with-php" target="_blank">this</a></p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Create-Github-Repo.png"><img alt="Create-Github-Repo" class="img-thumbnail" src="../images/blog/Create-Github-Repo.png" style="height:169px; width:300px" /></a></p>

<p><strong>Step 2 :</strong>&nbsp;Click on the &lsquo;+&rsquo; Icon in the Top Left of Dashboard, then Name your App and choose the Location</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Create-Project.png"><img alt="Create-Project" class="img-thumbnail" src="../images/blog/Create-Project.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Create-Heroku-App.png"><img alt="Create-Heroku-App" class="img-thumbnail" src="../images/blog/Create-Heroku-App.png" style="height:169px; width:300px" /></a></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Step 3 :</strong>&nbsp;Connect with Heroku-Belt or Github or Dropbox, I will prefer Github here. Just search for your repo and click on the connect button. (Create a valid composer.json in your Repo)</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Connect-Github.png"><img alt="Connect-Github" class="img-thumbnail" src="../images/blog/Connect-Github.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Connect-Repo.png"><img alt="Connect-Repo" class="img-thumbnail" src="../images/blog/Connect-Repo.png" style="height:169px; width:300px" /></a></p>

<p><strong>Step 4 :</strong>&nbsp;Enable automatic deploys by clicking on the button &lsquo;Enable automatic deploys&rsquo; and Deploy the Master Branch (or any Branch you prefer)</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Enable-Auto-Deploy.png"><img alt="Enable-Auto-Deploy" class="img-thumbnail" src="../images/blog/Enable-Auto-Deploy.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Deploy-Master-Branch.png"><img alt="Deploy-Master-Branch" class="img-thumbnail" src="../images/blog/Deploy-Master-Branch.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Deployed.png"><img alt="Deployed" class="img-thumbnail" src="../images/blog/Deployed.png" style="height:169px; width:300px" /></a></p>

<p><strong>Now, Your App is Live, Just click on the view button and the url redirected is your&nbsp;<a href="http://sys-heroku-tutorial.herokuapp.com/" target="_blank">App&rsquo;s URL.</a></strong></p>
',
'date' => '2015-09-19 21:56:41',
'status' => 1,
'created_at' => '2015-09-30 15:01:33',
'updated_at' => '2015-10-07 22:14:02',
),
27 => 
array (
'id' => 28,
'title' => 'Javascript is good boy too ! ',
'url' => 'Javascript-is-good-boy-too-!',
'content' => '<p>While developing the TaskManagerApp i am planning it with simple and efficient actions,</p>

<p>I had many wide options for the user to make themself comfort such as choosing the database mode, connection type etc.,</p>

<p>While constructing such things, as i am developing the front end in AngularJs i faced many sweet issues and then gently crossed it with stackoverflow.</p>

<p>And this made me to stuck for a while, i don’t know the reason why Logout menu is not expanding while the original template does.</p>

<p>After few investigation i found the class changes happening over it.. then i made myself to build that functionality.</p>

<p>Its as simple like having and removing the class on click event.</p>

<p>Here’s the way i deal with</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">function menuSelector() {<br />
if (document.getElementById("tobechanged").className == "dropdown pull-right" ) {<br />
document.getElementById("tobechanged").className = "dropdown pull-right open";<br />
}<br />
else<br />
{<br />
document.getElementById("tobechanged").className = "dropdown pull-right";<br />
}<br />
}</div>

<p><strong>Query summary :</strong></p>

<p>While clicking the Menu , the function menuSelector() will be called, it will check if the id named as ‘tobechanged’ has the class name<br />
‘dropdown pull-right’ (It means the menu is not expanded). if the class name is like than it will be renamed to ‘dropdown pull-right open’<br />
which will make the menu expand..If not it will be again set to ‘dropdown pull-right’</p>

<p>Any Questions ?</p>

<p>I am not sure even if someone is reading it. I am expecting a little question from someone as i made it like that.</p>

<p>Cheers</p>

<p> </p>

<p> </p>
',
'date' => '2015-09-23 11:26:41',
'status' => 1,
'created_at' => '2015-09-30 15:01:33',
'updated_at' => '2015-10-05 23:04:09',
),
28 => 
array (
'id' => 29,
'title' => 'Goolge’s New Logo ',
'url' => 'Goolge’s-New-Logo',
'content' => '<p>Yes, Google&rsquo;s logo updated&nbsp;<a href="http://googleblog.blogspot.in/2015/09/google-update.html" target="_blank">on the fly</a>, i wonder to see&nbsp;<a href="https://en.wikipedia.org/wiki/Sundar_Pichai" target="_blank">Mr.Sundar Pichai</a>&lsquo;s comment at first also you can see&nbsp;<a href="https://plus.google.com/+SuLtHaNAlLaUdeEn/posts/M6FHyGXmsCF" target="_blank">mine there.</a></p>

<p>Here&rsquo;s the animated logo</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/09/OGB-INSIDER-BLOGS-GoogleLogox2-Animated.gif"><img alt="OGB-INSIDER-BLOGS-GoogleLogox2-Animated" class="img-thumbnail" src="../images/blog/Google-Logo-Animated.gif" style="height:169px; width:300px" /></a></p>

<p>&nbsp;</p>

<p>Cheer&rsquo;s !</p>
',
'date' => '2015-09-28 17:46:41',
'status' => 1,
'created_at' => '2015-09-30 15:04:15',
'updated_at' => '2015-10-07 22:10:23',
),
29 => 
array (
'id' => 30,
'title' => ' Google App Script -> Which makes you feel Great !! ',
'url' => '-Google-App-Script-->-Which-makes-you-feel-Great-!!',
'content' => '<p>Hello !!</p>

<p>I worked on Google App Script last week ,and I really felt awesome on the work i had.</p>

<p>And I wanted to share the experience and goodfullness on it.</p>

<p>I will be sharing the Scripts as a part where i will proivde the basic information about writing the GoogleScript here</p>

<p>Here are the initiative links to you need to turn on</p>

<p>http://www.google.com/script/start/</p>

<p>https://developers.google.com/apps-script/?hl=en</p>

<p><strong>Basic Note :</strong></p>

<p><strong>1. To Initiae the Script, just navigate to</strong></p>

<p>https://script.google.com</p>

<p>File -&gt; New -&gt; Script</p>

<p>Name the Script name (prefer to end with .gs as extension)</p>

<p><strong>2. To Log in the Console</strong></p>

<p>Logger.log(&lsquo;Your Data&rsquo;);</p>

<p><strong>3. To Run the Script</strong></p>

<p>Press the Run Button in the Action Bar</p>

<p><strong>4. To view the Log</strong></p>

<p>View -&gt; Logs</p>

<p>There are many useful resources available in Internet regarding the Google Script in websites such as www.labnol.org</p>

<p>Let me continue in the following scripts in the following Posts &lt;3</p>
',
'date' => '2015-10-01 07:46:41',
'status' => 1,
'created_at' => '2015-09-30 15:04:42',
'updated_at' => '2015-10-07 22:08:59',
),
30 => 
array (
'id' => 31,
'title' => 'Think before you Build ',
'url' => 'Think-before-you-Build',
'content' => '<p>Few days i have to build a App name as Match Predicor. I wanted to use AngularJS, CSS with any Framework.&nbsp;</p>

<p>&nbsp;</p>

<p>I Choosed Laravel as the Framework, MySQL as the backend and proceeded to Build.&nbsp;</p>

<p>The app was almost ready and i wanted to release the app on the next day, The app was developed fully from my Local Machine where i have the latest xampp package (which should have the latest php and related packs).</p>

<p>&nbsp;</p>

<p>I really got surprise on the behavious of the application once i moved to online server. Nothing worked. i.e., i got error in the public/index.php Page always., I took sometime to have a try to fix on it. It was a fail in all the cases, i tried to think all the possiblities and nothing made the app works, but the App works very good in local machine..&nbsp;</p>

<p>Then i realized that the latest Laravel version which i use wants the latest php version i.e., 5.6 but the server i usually host the current webstie have only php 5.4 that makes the clashes.&nbsp;</p>

<p>&nbsp;</p>

<p>I can&#39;t able to downgrade easily the framework, then what i did is,&nbsp;</p>

<p><strong>1. Installed a New Laravel Framework in my machine,&nbsp;</strong></p>

<p><strong>2. Copied the Controllers, Models and Views</strong></p>

<p>&nbsp; &nbsp; &nbsp;While moving this to online, i removed few of the classes and methods inside the models which is not supported by the Laravel 5.0. This made me to have the app in two versions Laravel 5.1 and 5.0</p>
',
'date' => '2015-10-19 10:00:00',
'status' => 1,
'created_at' => '2015-11-01 00:20:20',
'updated_at' => '2015-11-05 15:04:32',
),
31 => 
array (
'id' => 32,
'title' => 'Increase your confidence. Defeat your past. Don\'t set limit ',
'url' => 'Increase-your-confidence.-Defeat-your-past.-Don\'t-set-limit',
'content' => '<p>You know what. I am really lucky to be myself.&nbsp;</p>

<p>I love the changes, behaviour, attitude and everything from me. I can see the goodness and the willingness to learn.&nbsp;</p>

<p>To be honest, i do love my computer very much than any other things, which automatically attracts me to learn much things better.&nbsp;</p>

<p><strong>Never limit yourself</strong></p>

<p><strong>&nbsp;&nbsp;&nbsp;</strong>Never rest your mind by the way of earning more money with less work. Even if you got low or high salary, if you have the will to learn you will&nbsp;do it.&nbsp;</p>

<p>&nbsp; &nbsp;It doesn&#39;t matter how much experience you got in terms of years, but it matters what you did&nbsp;in those period.&nbsp;</p>

<p>&nbsp; &nbsp;Always do innovative things, create awesomeness, explore the best, achieve the best and make yourself better. If you do so, you don&#39;t need to sell yourself, you will be identified by the right person who really needs you.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Cheers !!</strong></p>
',
'date' => '2015-10-23 10:00:00',
'status' => 1,
'created_at' => '2015-11-01 00:20:59',
'updated_at' => '2015-11-05 15:04:55',
),
32 => 
array (
'id' => 33,
'title' => 'Cordova :: The Platform which makes web dev to dive into mobile ',
'url' => 'Cordova-::-The-Platform-which-makes-web-dev-to-dive-into-mobile',
'content' => '<p>Firstly, I thank Mr.Suresh who always gives me the opportunity to learn, I always prefer to learn new things and do innovate works whereever i go.&nbsp;</p>

<p>And i saw him as the person who wanted to do the same, I shall write a seperate post to thank him as i wanted to do.</p>

<p>Ok, The cordova, Even those it is a hybrid way to develop mobile apps, it makes a convinient way for web dev to build mobild app on the go.&nbsp;</p>

<p>The things to do is to choose an awesome template which looks like a mobile app with less weight and start writing the apis and then make the build that&#39;s it.&nbsp;</p>

<p>&nbsp;</p>

<p>I mostly choose NG to speed up the web and grab some good tempalates available over the web and make things done.&nbsp;</p>

<p>And i was on the plan to build my own app to manage my Website and me (hehe, just to avoid any missout and for some plans)&nbsp;</p>

<p>Also, i recommend using&nbsp;ngcordova to grab the functions which deals with triggering the fireful mobile functions. Yes you can, but make sure it doesn&#39;t looks like a website, no huge power consumption and takes less time for all actions. And that&#39;s the way.&nbsp;</p>

<p>&nbsp;</p>

<p>Like always, i never want you to stop with cordova, lets dive into native app development once the cordova is done.&nbsp;</p>

<p>Good Luck !</p>
',
'date' => '2015-11-01 10:00:00',
'status' => 1,
'created_at' => '2015-11-01 00:21:24',
'updated_at' => '2015-11-05 15:05:19',
),
33 => 
array (
'id' => 34,
'title' => 'First Windows App Development',
'url' => 'First-Windows-App-Developmen',
'content' => '<p>Yeah, This was the day i created First Windows App, though it was a hybrid one, i faced lots of challenges to reach it, Here i am giving it in short</p>

<p>&nbsp;</p>

<p>1. First you need a Windows 8.1 Operating System, (If not achieve it thought VMWare)</p>

<p>2. Visual Studio 2013 Express</p>

<p>3. Cordova -- Nodejs, Cordova package</p>

<p>4. Windows Phone 8.0 or 8.1&nbsp;</p>

<p>Once all set, you need to developer unlock the VS and the Windows Phone&#39;s Live Account,</p>

<p>Then you shall proceed the regualr way to make the hybrid one.&nbsp;</p>

<p>You may face sdk issues while building and you want to fix it, The way how i did like <a href="https://github.com/phonegap/phonegap-plugin-push/issues/297">here </a>and <a href="https://github.com/phonegap/phonegap-plugin-push/issues/271">here</a></p>

<p>Cheers and Good Luck !</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
'date' => '2015-11-13 00:00:00',
'status' => 1,
'created_at' => '2015-11-03 22:30:50',
'updated_at' => '2015-11-03 22:31:31',
),
34 => 
array (
'id' => 35,
'title' => 'Laravel Middleware - Short Intro',
'url' => 'Laravel-Middleware---Short-Intr',
'content' => '<p>This is the post about Laravel&#39;s Middleware</p>

<p>Middleware is one of the cool way that is included in Laravel 5, It focuses mainly on dealing with the request that reaches application. The Laravel 5 users are highly adviced to use this feature to make use of it.&nbsp;</p>

<p>Middlware can be enabled or disabled (included or excluded) from Kernal.php file inside the `Http` Folder.</p>

<p>This is the proper &nbsp;prodefinition given by Laravel about Middleware</p>

<p><span style="color:#008000">HTTP middleware provide a convenient mechanism for filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.</span></p>

<p>We can create our own middleware using artisan command&nbsp;</p>

<p><code>make:middleware</code></p>

<pre>
<code>php artisan make:middleware OldMiddleware</code></pre>

<p>And we can also do actions before reaching and after reaching Middleware. Read the <a href="http://laravel.com/docs/5.1/middleware">docs</a>&nbsp;to know more about Middlware</p>

<p>&nbsp;</p>
',
'date' => '2015-11-15 00:00:00',
'status' => 1,
'created_at' => '2015-11-05 13:33:17',
'updated_at' => '2015-11-05 13:33:53',
),
35 => 
array (
'id' => 36,
'title' => 'Time to Shift yeah i got job in Chennai Again ',
'url' => 'Time-to-Shift-yeah-i-got-job-in-Chennai-Again',
'content' => '<p>Yeah, i am stepping into my 3rd Year in Work.&nbsp;</p>

<p>Absolutely it means i have completed 2 year of working experience (Mostly php :p)</p>

<p>Now, i got an offer from Chennai, I planned a lot in this period but i wanted to, and i expect the place i join to co-ordinate.</p>

<p>Yes, it should.. To server the company and grow along with it, is the motto in my resume ;)</p>

<p>Well, only 1 more day to go from Old Company and i shall proceed with the shifting process, Nov 16th is the joining date in New Company, I shall tell a lot about New Company soon !!</p>
',
'date' => '2015-11-18 00:00:00',
'status' => 1,
'created_at' => '2015-11-13 03:43:04',
'updated_at' => '2015-11-13 03:45:18',
),
36 => 
array (
'id' => 37,
'title' => 'Chosen Select and Input old Laravel',
'url' => 'Chosen-Select-and-Input-old-Larave',
'content' => '<p>Writing this Post after long time, which would help others if they use Chosen Menu</p>

<p>&nbsp;</p>

<p>Here is the Link of <a href="https://harvesthq.github.io/chosen/">Chosen Menu</a>&nbsp;. Infact i use it for many of my projects, which is simple and free to use.</p>

<p>&nbsp;</p>

<p>AFAIK You can customize this as per your need, today morning while i do some bed time programming i wanted to restore the selected items after validation, it was a form post action, What i did is simple..</p>

<p>&nbsp;</p>

<p>1. Check if the old inputs were there</p>

<p>2. If so, then get the old inputs and iterate along to check the presence <a href="http://php.net/manual/en/function.in-array.php">in_array</a></p>

<p>&nbsp;</p>

<p>Here you go</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">@foreach($types as $type)<br />
&lt;option value=&quot;{{ $type-&gt;id }}&quot; &nbsp;&lt;?php&nbsp;if(Input::old(&#39;type&#39;))&nbsp;{&nbsp;if(in_array($type-&gt;id, Input::old(&#39;type&#39;))) { echo &#39;selected=&quot;selected&quot;&#39;; }&nbsp;}?&gt;&nbsp;&gt;&nbsp;{{ $type-&gt;name }} &lt;/option&gt;<br />
@endforeach</div>

<p>&nbsp;</p>

<p>You shall break it down to look deeper :)&nbsp;</p>
',
'date' => '2016-02-12 10:10:00',
'status' => 1,
'created_at' => '2016-02-11 10:40:21',
'updated_at' => '2016-02-11 10:40:21',
),
37 => 
array (
'id' => 38,
'title' => 'Installing Composer for xampp in Ubuntu',
'url' => 'Installing-Composer-for-xampp-in-Ubuntu',
'content' => '<p>If you look for a way to install Composer for the machine which is powered with xampp, then here are the tweaks that you shall do.</p>

<p><strong>Step 1 :&nbsp;</strong></p>

<p>Get the composer&nbsp;</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php</code></div>

<p><strong>Step 2&nbsp;:&nbsp;</strong></p>

<p>Make it Global</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>sudo mv composer.phar /usr/local/bin/composer</code></div>

<p><strong>Step 3&nbsp;:&nbsp;</strong></p>

<p>symlink it</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>ln -s /opt/lampp/bin/php /usr/local/bin/php</code></div>

<p>&nbsp;</p>

<p><code>And you&#39;re done ;)</code></p>
',
'date' => '2016-02-20 10:00:00',
'status' => 1,
'created_at' => '2016-02-17 09:36:06',
'updated_at' => '2016-02-17 09:36:06',
),
38 => 
array (
'id' => 39,
'title' => 'How to auth logout in laravel 5.2',
'url' => 'How-to-auth-logout-in-laravel-5.2',
'content' => '<p>This is just a quick note on how to logout the user if he is using Auth in Laravel 5.2</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">
<p>public function getLogout() {</p>

<p>auth()-&gt;logout();</p>

<p>return redirect(&#39;admin&#39;)-&gt;with(&#39;status&#39;, &#39;Logged out Successfully&#39;);</p>

<p>}</p>
</div>

<p>Make usre that the user table has remember_token and updated_at coloumn ;)</p>

<p>&nbsp;</p>

<p>Happy Coding !!&nbsp;</p>
',
'date' => '2016-03-11 11:00:00',
'status' => 1,
'created_at' => '2016-03-08 11:58:03',
'updated_at' => '2016-03-08 11:58:03',
),
39 => 
array (
'id' => 40,
'title' => 'Linux Ubuntu 16.04 Macbuntu Look',
'url' => 'Linux-Ubuntu-16.04-Macbuntu-Look',
'content' => '<p>I always love Ubuntu. After the firstday download of Ubuntu 16.04 i tried to change its look like mac, however i couldn&#39;t found few packages, but after noobslab announcement of Macbuntu look, i suddenly changed the look within minutes.. Here&#39;s the preview&nbsp;<img alt="" src="http://sulthanallaudeen.com/images/Macbuntu-16.04-1.png" class=\'img-thumbnail\' /></p>

<p><img alt="" src="http://sulthanallaudeen.com/images/Macbuntu-16.04-2.png" class=\'img-thumbnail\'/></p>

<p>&nbsp;</p>

<p>Why i am crazy on Mac Look for my Ubuntu ?</p>

<p>Because of the high performance of Linux and Awesome look of Mac ?</p>

<p>Yeah on my Ubuntu 16.04 LTS, I got the Macbuntu look !!</p>

<p>&nbsp;</p>

<p>Here&#39;s the FB source :&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><iframe frameborder="0" height="676" scrolling="no" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fallaudeen.s%2Fposts%2F773653469436795&amp;width=500" style="border:none;overflow:hidden" width="500"></iframe></p>',
'date' => '2016-04-30 10:00:00',
'status' => 1,
'created_at' => '2016-04-28 12:44:04',
'updated_at' => '2016-04-28 12:48:52',
),
40 => 
array (
'id' => 41,
'title' => 'E: Could not get lock lock open (11 Resource temporarily unavailable)',
'url' => 'E:-Could-not-get-lock-lock-open-(11-Resource-temporarily-unavailable)',
'content' => '<p>You would get this message few times, while you abort the download in your linux based machine.&nbsp;</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>E: Could not get lock /var/lib/dpkg/lock - open (11 Resource temporarily unavailable)</code><br />
<code>E: Unable to lock the administration directory (/var/lib/dpkg/) is another process using it? &nbsp;</code></div>

<p>and that is not a risky thing to clear it.&nbsp;</p>

<p>The reason is beause of the lock placed during installation, Here&#39;s how you can do that .</p>

<p>Open the terminal and type the following commands,</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>sudo rm /var/lib/apt/lists/lock</code><br />
<code>sudo rm /var/cache/apt/archives/lock</code></div>
',
'date' => '2016-05-01 10:00:00',
'status' => 1,
'created_at' => '2016-04-29 09:20:24',
'updated_at' => '2016-04-29 09:22:19',
),
41 => 
array (
'id' => 42,
'title' => 'Cron Job Godaddy issue',
'url' => 'Cron-Job-Godaddy-issue',
'content' => '<p>As a part of building hybrid app to the Company Employee usage, i need to run a cron job at certain time, This was hosted on godaddy, i tried several way and nothing worked out.. Even i tried to go some third party to run cron and realized their packages. Then i planned to do google automated script which is my favorie, Then as a last try i tried this command,&nbsp;</p>

<p>/usr/bin/php -q /home/wekancode/public_html/wekancode/cron.php&nbsp;</p>

<p>And it worked awesome !!</p>

<p>&nbsp;</p>

<p>Thanks to myself for not losing confidence,. Cheers !!</p>

<p>&nbsp;</p>

<p>PS</p>

<p>This was done at 11.53 pm, after i am fully drunk .. I mean ******&nbsp;!</p>
',
'date' => '2016-06-21 11:00:00',
'status' => 1,
'created_at' => '2016-06-19 12:53:20',
'updated_at' => '2016-06-19 12:53:50',
),
42 => 
array (
'id' => 43,
'title' => 'Hybrid Application for Personal is not a problem at all',
'url' => 'Hybrid-Application-for-Personal-is-not-a-problem-at-all',
'content' => '<p>Yeah,</p>

<p>Who said hybrid app sucks ?</p>

<p>It depends on how you build, i have read many articles talking about native and hybrid apps.&nbsp;</p>

<p>I can find several pros and cons on both platforms, then finally concluded that it depensd on the requirement and usage. So i stronly recommend hybrid for personal usage which makes everything done and works flawlessly.</p>

<p>&nbsp;</p>

<p>Happy Coding !!</p>

<p>&nbsp;</p>
',
'date' => '2016-06-17 10:00:00',
'status' => 1,
'created_at' => '2016-06-19 12:56:39',
'updated_at' => '2016-06-19 12:56:39',
),
43 => 
array (
'id' => 44,
'title' => 'JQuery use document click whenever needed',
'url' => 'JQuery-use-document-click-whenever-needed',
'content' => '<p>Use&nbsp;</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>$(document).on(&#39;click&#39;, &#39;#id&#39;, function(){});</code></div>

<p>Instead of using loading the jquery functions in ajax, (In fear of DOM)&nbsp; :p</p>

<p>[I know it well, that spoiled most of my codes] Thanks for a &nbsp;UI Designer&nbsp; Ashwath&nbsp;who taught me this !!</p>
',
'date' => '2016-07-23 11:00:00',
'status' => 1,
'created_at' => '2016-07-21 00:47:19',
'updated_at' => '2016-07-21 00:47:19',
),
44 => 
array (
'id' => 45,
'title' => 'Great day for Yahoo ! Not Really, it should great day for technology',
'url' => 'Great-day-for-Yahoo-!-Not-Really,-it-should-great-day-for-technology',
'content' => '<p>Yeah,&nbsp;</p>

<p>After a week&#39;s bid, its concluded that Yahoo is to acquire by Verizon for $4.83 billion, We already know that yahoo stands first in the search, mail and messager decades ago. After&nbsp;marissa mayer&#39;s position she acquired tumblr and few stalks of alibaba. It happened that it was not enough to beat the giants.&nbsp;</p>

<p>Tech crunch already bought by ALO which is acquired by Verizon still gonna add a boost for tech. Let&#39;s wait for the change and great new.&nbsp;</p>

<p>Read more in Tech Crunch &nbsp;<a href="https://techcrunch.com/2016/07/25/tim-armstrong-yahoo-interview/">here</a>&nbsp;and <a href="https://techcrunch.com/2016/07/25/verizon-buys-yahoo-for-4-83-billion/">here</a></p>

<p>Thanks !<br />
&nbsp;</p>
',
'date' => '2016-07-28 11:00:00',
'status' => 1,
'created_at' => '2016-07-26 11:03:43',
'updated_at' => '2016-07-26 11:03:43',
),
45 => 
array (
'id' => 46,
'title' => 'Marissa mayer ! Stands height',
'url' => 'Marissa-mayer-!-Stands-height',
'content' => '<p>Though she&#39;s an former executive, key spokesperson for Google, after her entry to yahoo at 2012, she took many steps to make it worth, yeah she doubled the customers and concentrated on mobile side. Though this day it was considered it was not enough to stand against the giants google and facebook. That&#39;s the reason this day she&#39;s happy to announce about the acquiring of Yahoo !</p>

<p>Great move lady !</p>
',
'date' => '2016-07-28 12:00:00',
'status' => 1,
'created_at' => '2016-07-26 11:06:57',
'updated_at' => '2016-07-26 11:06:57',
),
46 => 
array (
'id' => 47,
'title' => 'Creating Family Tree',
'url' => 'Creating-Family-Tree',
'content' => '<p>This is the First attempt to create the Family Tree.</p>

<p><img alt="" src="https://i.imgur.com/e4Ujbe9.png" style="height:2023px; width:2119px" /></p>

<p>The work is in progress....</p>',
'date' => '2012-05-24 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 19:56:07',
'updated_at' => '2017-10-31 19:56:07',
),
47 => 
array (
'id' => 48,
'title' => 'Google Chrome updated the security feature',
'url' => 'Google-Chrome-updated-the-security-feature',
'content' => '<p>FindMyFriend app is in progress, but I can see some important features are not working. After some search i found the below reason</p>

<p><a href="https://www.chromium.org/Home/chromium-security/prefer-secure-origins-for-powerful-new-features">https://www.chromium.org/Home/chromium-security/prefer-secure-origins-for-powerful-new-features</a></p>

<p>It says that Google Chrome has updated the security feature in which the origin should start from the given below extensions</p>

<p>(https, *, *)<br />
(wss, *, *)<br />
(*, localhost, *)<br />
(*, 127/8, *)<br />
(*, ::1/128, *)<br />
(file, *, &mdash;)<br />
(chrome-extension, *, &mdash;)&nbsp;<br />
Need to do a workaround for this update</p>',
'date' => '2017-02-27 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 19:58:42',
'updated_at' => '2017-10-31 19:59:22',
),
48 => 
array (
'id' => 49,
'title' => 'Started Learning Android Native',
'url' => 'Started-Learning-Android-Native',
'content' => '<p>After rolling back to Ubuntu OS due to Windows lazy performance and hybrid&#39;s evil update I planned to start learning Android. This time i planned to cover features day by day and let me update the posts once i have done !</p>',
'date' => '2017-02-22 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:02:14',
'updated_at' => '2017-10-31 20:02:14',
),
49 => 
array (
'id' => 50,
'title' => 'Solution Error: Could not find gradle wrapper within Android SDK. Might need to update your Android SDK',
'url' => 'Solution-Error:-Could-not-find-gradle-wrapper-within-Android-SDK.-Might-need-to-update-your-Android-SDK',
'content' => '<p>After the update of Android Studio 2.3 i got this error, you might also probably..</p>

<p><img alt="" src="https://i.imgur.com/rzAhGYr.png" style="height:28px; width:1241px" /></p>

<p>There are solutions given like update the ANDROID_HOME in proper place, but none of that worked for me..</p>

<p>The Actual issue is missing the tools in the Android SDK.</p>

<p>To fix this, just download Only the command line tools from Android SDK Website,&nbsp;</p>',
'date' => '2017-05-25 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:12:44',
'updated_at' => '2017-10-31 20:12:44',
),
50 => 
array (
'id' => 51,
'title' => 'Day 1 Basic Layouts and Activity',
'url' => 'Day-1-Basic-Layouts-and-Activity',
'content' => '<p>Learned How to create Activity in Android and Linking from One Page to another.&nbsp;</p>

<p>Created Login and Register Activity and linked to each other. !</p>',
'date' => '2017-02-22 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:13:48',
'updated_at' => '2017-10-31 20:13:48',
),
51 => 
array (
'id' => 52,
'title' => 'Day 2 API Calls using Volley',
'url' => 'Day-2-API-Calls-using-Volley',
'content' => '<p>After creating Login and Register i plan to Intergrate the page with API calls,&nbsp;</p>

<p>So started learn how to do API calls and parse the response given by the server.</p>

<p>BTW, I used FindMyFriend API here !</p>

<p>Here&#39;s the Code</p>

<p>&nbsp;</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">
<pre>
package com.example.allaudeen.sa;

import android.app.Dialog;
import android.content.DialogInterface;
import android.service.voice.VoiceInteractionSession;
import android.support.v4.content.Loader;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.android.volley.Response;

import org.json.JSONException;
import org.json.JSONObject;

import java.lang.reflect.Method;
import java.util.HashMap;
import java.util.Map;

import java.lang.String;


public class LoginActivity extends AppCompatActivity {

private final String TAG = LoginActivity.class.getSimpleName();

public final String baseUrl = &quot;https://findmyfriend-app.herokuapp.com&quot;;
//public final String baseUrl = &quot;http://localhost:3000&quot;;

public final String registerUser = baseUrl+&quot;/users/registerUser&quot;;
public final String loginUser = baseUrl+&quot;/users/loginUser&quot;;




@Override
protected void onCreate(Bundle savedInstanceState) {
super.onCreate(savedInstanceState);
setContentView(R.layout.activity_login);
//Dialogue


}

public void showDashboard(View v)
{
Log.d(&quot;Log&quot;,&quot;Clicked Login Button&quot;);
setContentView(R.layout.activity_register);
}

public void showLogin(View v)
{
Log.d(&quot;Log&quot;,&quot;Clicked Login Button&quot;);
setContentView(R.layout.activity_login);
}
public void doLogout(View v)
{
Toast.makeText(getApplicationContext(), &quot;Loggedout Successfully&quot;, Toast.LENGTH_LONG).show();
setContentView(R.layout.activity_login);
}



public void doLogin(View v)
{
//Email
EditText emailTxt = (EditText)findViewById(R.id.email);
final String email = emailTxt.getText().toString();
//Password
EditText passwordTxt = (EditText)findViewById(R.id.password);
final String password = passwordTxt.getText().toString();
RequestQueue queue = Volley.newRequestQueue(this);

StringRequest postRequest = new StringRequest(Request.Method.POST, loginUser,
new Response.Listener&lt;String&gt;()
{
@Override
public void onResponse(String response) {
try {
JSONObject mainObject = new JSONObject(response);
Integer successVal = mainObject.getInt(&quot;success&quot;);
if(successVal==0)
{
JSONObject mainObjects = new JSONObject(response);
String successMsg = mainObjects.getString(&quot;message&quot;);
Toast.makeText(getApplicationContext(), successMsg, Toast.LENGTH_LONG).show();
}
else
{
Toast.makeText(getApplicationContext(), &quot;LoggedIn Succesfully&quot;, Toast.LENGTH_LONG).show();
setContentView(R.layout.activity_dashboard);
}
} catch (JSONException e) {
Log.e(&quot;MYAPP&quot;, &quot;unexpected JSON exception&quot;, e);
}
}
},
new Response.ErrorListener()
{
@Override
public void onErrorResponse(VolleyError error) {
// error
Log.d(&quot;Error.Response&quot;, error.toString());
}
}
) {
@Override
protected Map&lt;String, String&gt; getParams()
{
Map&lt;String, String&gt;  params = new HashMap&lt;String, String&gt;();
params.put(&quot;email&quot;, email);
params.put(&quot;password&quot;, password);

return params;
}
};
queue.add(postRequest);
}



public void doRegister(View v)
{


//Full Name
EditText fullNameTxt = (EditText)findViewById(R.id.fullName);
final String fullName = fullNameTxt.getText().toString();
//Email
EditText emailTxt = (EditText)findViewById(R.id.email);
final String email = emailTxt.getText().toString();
//Password
EditText passwordTxt = (EditText)findViewById(R.id.password);
final String password = passwordTxt.getText().toString();
final TextView mTextView = (TextView) findViewById(R.id.text);
RequestQueue queue = Volley.newRequestQueue(this);
StringRequest postRequest = new StringRequest(Request.Method.POST, registerUser,
new Response.Listener&lt;String&gt;()
{
@Override
public void onResponse(String response) {

try {
JSONObject mainObject = new JSONObject(response);
Integer successVal = mainObject.getInt(&quot;success&quot;);
if(successVal==0)
{
JSONObject mainObjecta = new JSONObject(response);
String successMsg = mainObjecta.getString(&quot;message&quot;);
Toast.makeText(getApplicationContext(), successMsg, Toast.LENGTH_LONG).show();
}
else
{
Toast.makeText(getApplicationContext(), &quot;Registered Succesfully&quot;, Toast.LENGTH_LONG).show();
setContentView(R.layout.activity_login);
}
} catch (JSONException e) {
Log.e(&quot;MYAPP&quot;, &quot;unexpected JSON exception&quot;, e);
}

}
},
new Response.ErrorListener()
{
@Override
public void onErrorResponse(VolleyError error) {
// error
Log.d(&quot;Error.Response..-&gt;&quot;, error.toString());
}
}
) {
@Override
protected Map&lt;String, String&gt; getParams()
{
Map&lt;String, String&gt;  params = new HashMap&lt;String, String&gt;();
params.put(&quot;email&quot;, email);
params.put(&quot;password&quot;, password);
params.put(&quot;name&quot;, fullName);

return params;
}
};
queue.add(postRequest);
}


}</pre>
</div>',
'date' => '2017-02-22 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:14:55',
'updated_at' => '2017-10-31 20:14:55',
),
52 => 
array (
'id' => 53,
'title' => 'Day 3 Toast Message and Intent',
'url' => 'Day-3-Toast-Message-and-Intent',
'content' => '<p>Toast message should not cost more, We use it to display the server response.</p>

<p>Intent is used to move the Control from one activity to another.</p>

<p>Here&#39;s how you can transfer the Intent</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">
<pre>
Intent intent = new Intent(LoginActivity.this, DashBoardActivity.class);
startActivity(intent);</pre>
</div>

<p>Here&#39;s how you can display a Toast</p>

<p>&nbsp;</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">
<pre>
import android.widget.Toast;</pre>

<pre>
Toast.makeText(getApplicationContext(), successMsg, Toast.LENGTH_LONG).show();</pre>
&nbsp;</div>

<p>&nbsp;</p>',
'date' => '2017-11-01 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:15:50',
'updated_at' => '2017-10-31 20:15:50',
),
53 => 
array (
'id' => 54,
'title' => 'Day 4 Using Firebase for Push Notification',
'url' => 'Day-4-Using-Firebase-for-Push-Notification',
'content' => '<p>After customizing few modules i planned to implement firebase in the project for sending push notification.&nbsp;</p>

<p>What you need to do is</p>

<p>1. Go to Tools -&gt; Firebase-&gt;Cloud Messaging -&gt; Import / Create New Project</p>

<p>2. Once the project is created in the Google App Engine, you need to sync the Gradle</p>

<p>Whenver you run the project, the app will get the firebase token, and you can get the firebase token by&nbsp;<strong><code>FirebaseInstanceId.getInstance().getToken()</code></strong></p>

<p>You can test it by consoling it</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">Log.d(&quot;Firebase&quot;, &quot;token &quot;+ FirebaseInstanceId.getInstance().getToken());</div>

<p>3. Next thing you need to do is, sending push notification on your device.</p>

<p>You can use send it throught the Firebase console &nbsp;like the image given below</p>

<p><img alt="" src="https://i.imgur.com/u6IRqwN.png" style="height:719px; width:1280px" /></p>

<p>&nbsp;</p>',
'date' => '2017-11-01 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:17:35',
'updated_at' => '2017-10-31 20:17:52',
),
54 => 
array (
'id' => 55,
'title' => 'Day 5 Sending Firebase Notification using Nodejs',
'url' => 'Day-5-Sending-Firebase-Notification-using-Nodejs',
'content' => '<p>Once you&#39;re setup with the firebase in your application, you can send push notification through any source, I am using Nodejs.</p>

<p>Step 1 : Install FCM in node project&nbsp;Go here&nbsp;https://www.npmjs.com/package/fcm or add</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">
<pre>
<code>From your terminal

<strong>npm install fcm</strong></code></pre>
</div>

<p><code>Step 2 : Include fcm in your controller</code></p>

<p><code><strong>var FCM = require(&#39;fcm-push&#39;);</strong></code></p>

<p>Step 3 : Configure fcm in your project&nbsp;</p>

<p>var fcm = new FCM(serverKey);</p>

<p>Step 4 : Trigger / Push the push notification</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">var message = {<br />
&nbsp; &nbsp; &nbsp; &nbsp; to: fcm_token<br />
&nbsp; &nbsp; &nbsp; &nbsp; collapse_key: pid,<br />
&nbsp; &nbsp; &nbsp; &nbsp; notification: {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; title: &quot;title&quot;,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; body: message<br />
&nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; };<br />
fcm.send(message, function(err, response) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; if (err) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; console.log(&quot;Something has gone wrong!&quot;);<br />
&nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; console.log(&quot;Successfully sent with response: &quot;, response);<br />
&nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; });</div>

<p>&nbsp;Now you&#39;re done !&nbsp;</p>',
'date' => '2017-11-01 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:18:56',
'updated_at' => '2017-10-31 20:18:56',
),
55 => 
array (
'id' => 56,
'title' => 'Created FCM Push for Tester in Heroku',
'url' => 'Created-FCM-Push-for-Tester-in-Heroku',
'content' => '<p>While testing the FCM for Hybrid apps, i depend on some 3rd party to testing it, I thought to create it on my own, and here&#39;s it on Heroku !</p>

<p><a href="https://fcm-push.herokuapp.com/">https://fcm-push.herokuapp.com/</a></p>

<p>If you need the code, go get here on Github&nbsp;</p>

<p><a href="https://github.com/sulthanallaudeen/fcm-push">https://github.com/sulthanallaudeen/fcm-push</a></p>

<p>I am saving a bit of code here in order to save !</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">
<p>var serverKey = req.body.key;<br />
&nbsp; &nbsp; &nbsp; &nbsp; var fcm = new FCM(serverKey);<br />
&nbsp; &nbsp; &nbsp; &nbsp; var message = {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to: req.body.to,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; collapse_key: &#39;your_collapse_key&#39;,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; data: {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; key: req.body.title<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; },<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; notification: {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; title: req.body.title,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; body: req.body.body<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; };</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; //callback style<br />
&nbsp; &nbsp; &nbsp; &nbsp; fcm.send(message, function(err, response) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (err) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; res.status(200).json({<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;success&quot;: &quot;0&quot;,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;message&quot;: err<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; });<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; res.status(200).json({<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;success&quot;: &quot;1&quot;,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;message&quot;: response<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; });<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; });</p>
</div>

<p>And the client part will be&nbsp;</p>

<p>&nbsp;</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">
<pre>
$(document).ready(function() {
$(&quot;#sendPush&quot;).click(function() {
var url = window.location.href + &#39;/&#39;;
var key = $(&quot;#key&quot;).val();
var to = $(&quot;#fcm_token&quot;).val();
var title = $(&quot;#title&quot;).val();
var body = $(&quot;#body&quot;).val();
$.post(&quot;sendPush&quot;, { key: key, to: to, title: title, body: body })
.done(function(data) {
alert(&quot;Pls check console for now !!&quot;);
console.log(data);
});
});
});</pre>
</div>

<p>There you go !&nbsp;</p>',
'date' => '2017-11-01 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:27:51',
'updated_at' => '2017-10-31 20:27:51',
),
56 => 
array (
'id' => 57,
'title' => 'Change of Company : Wekancode to TPF',
'url' => 'Change-of-Company-:-Wekancode-to-TPF',
'content' => '<p>Change of Company : Wekancode to TPF</p>',
'date' => '2017-06-16 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:35:08',
'updated_at' => '2017-10-31 20:35:08',
),
57 => 
array (
'id' => 58,
'title' => 'Notam Feed',
'url' => 'Notam-Feed',
'content' => '<p>Once i was assigned to do an interesting task. (Web scrapping - for testing purpose)</p>

<p>I have done a much play in manual javascript html parsing technique, and then finally came up with php</p>

<p>Here&#39;s the part&nbsp;</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">&lt;?php<br />
header(&#39;Access-Control-Allow-Origin: *&#39;);<br />
header(&#39;Access-Control-Allow-Methods: GET&#39;);<br />
if($_GET){<br />
if($_GET[&#39;code&#39;]==&#39;&#39;){<br />
&nbsp; &nbsp; $error =&quot;Code should not be empty&quot;;<br />
&nbsp; &nbsp; echo $error;<br />
}<br />
else{<br />
$url = &quot;https://pilotweb.nas.faa.gov/PilotWeb/notamRetrievalByICAOAction.do?method=displayByICAOs&amp;reportType=RAW&amp;formatType=ICAO&amp;retrieveLocId=&quot;.$_GET[&#39;code&#39;].&quot;&amp;actionType=notamRetrievalByICAOs&quot;;<br />
$data = &nbsp;file_get_contents($url);<br />
echo $data;<br />
}<br />
}<br />
else{<br />
&nbsp; &nbsp; $error =&quot;Invalid Access&quot;;<br />
&nbsp; &nbsp; //echo $error;<br />
}<br />
?&gt;</div>

<p>Also,&nbsp;</p>

<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">&lt;?php<br />
header(&#39;Access-Control-Allow-Origin: *&#39;);<br />
header(&#39;Access-Control-Allow-Methods: GET&#39;);<br />
$url = &quot;https://pilotweb.nas.faa.gov/PilotWeb/notamRetrievalByICAOAction.do?method=displayByICAOs&amp;reportType=RAW&amp;formatType=ICAO&amp;retrieveLocId=VOMM&amp;actionType=notamRetrievalByICAOs&quot;;<br />
$data = &nbsp;file_get_contents($url);<br />
echo $data;<br />
?&gt;&nbsp;</div>

<p>&nbsp;</p>

<p>And the javascript part is missing, as i didn&#39;t saved it in good way,</p>

<p>&nbsp;</p>

<p>btw, here&#39;s the heroku app</p>

<p><a href="http://notams.herokuapp.com">notams.herokuapp.com</a>&nbsp;</p>',
'date' => '2017-09-01 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:41:26',
'updated_at' => '2017-10-31 20:41:26',
),
58 => 
array (
'id' => 59,
'title' => 'Interest lies on bots, chatbot inspired from devpost aws challenge',
'url' => 'Interest-lies-on-bots,-chatbot-inspired-from-devpost-aws-challenge',
'content' => '<p>Once i came across <a href="https://devpost.com/submit-to/4979-aws-chatbot-challenge/select">this</a>&nbsp;post, i really want to explore the existing submissions and was really inspired on the works,</p>

<p>Yes creating chat bot is not a easy process but i set my mind to create bots that atlest solves my real life problems !</p>',
'date' => '2017-09-01 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:44:24',
'updated_at' => '2017-10-31 20:44:24',
),
59 => 
array (
'id' => 60,
'title' => 'Initiating My GitHub Badge',
'url' => 'Initiating-My-GitHub-Badge',
'content' => '<p>Just reserved the name&nbsp;<a href="http://my-github-badge">my-github-badge</a>&nbsp;, need to work on in it, will update the same in this blog once the work was done !</p>',
'date' => '2017-10-12 00:00:00',
'status' => 1,
'created_at' => '2017-10-31 20:47:22',
'updated_at' => '2017-10-31 20:47:22',
),
));
        
        
    }
}