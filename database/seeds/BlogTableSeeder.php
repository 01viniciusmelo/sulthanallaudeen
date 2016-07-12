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
                'id' => '1',
                'blogTitle' => 'First Post ',
                'blogUrl' => 'First-Post',
                'blogContent' => '<p>This is the First Post of Sysaxiom after the wordpress Installation on 20th May 2015.</p>

<p>This installation should be some 100th installation of various applications within sysaxiom.</p>
',
                'blogAuthor' => '1',
                'blogDate' => '2014-05-01 20:55:05',
                'blogStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 07:02:21',
                'updated_at' => '2015-09-30 16:57:57',
            ),
            1 => 
            array (
                'id' => '2',
                'blogTitle' => 'Simple jquery ajax call to a .txt file ',
                'blogUrl' => 'Simple-jquery-ajax-call-to-a-.txt-file',
                'blogContent' => '<p>Here&rsquo;s the simple ajax call to the text file which would return the content the targeted text fil</p>

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
        'blogAuthor' => '1',
        'blogDate' => '2015-05-03 21:46:34',
        'blogStatus' => '1',
        'status' => '0',
        'created_at' => '2015-09-30 18:24:21',
        'updated_at' => '2015-10-06 04:46:44',
    ),
    2 => 
    array (
        'id' => '3',
        'blogTitle' => 'Google Maps Marker Shutsdown temporarily starting from 12th may 2015 ',
        'blogUrl' => 'Google-Maps-Marker-Shutsdown-temporarily-starting-from-12th-may-2015',
        'blogContent' => '<p>After pranksters used Google Map Maker to draw an&nbsp;<a href="http://thenextweb.com/google/2015/04/24/theres-an-android-peeing-on-apple-on-google-maps-and-we-cant-figure-out-why/">Android peeing on an Apple Logo</a>&nbsp;and engage in other acts of spammy vandalism, Google&nbsp;<a href="https://productforums.google.com/forum/#!category-topic/map-maker/news-and-announcements/crFEbGXJ-HI">has announced</a>&nbsp;that it will temporarily shut down its online map editor while it rethinks its approval process.</p>

<p>&nbsp;</p>

<p>Here is the screen that i have experienced few moments ago.</p>

<p><img alt="" class="img-thumbnail" src="../images/blog/GoogleMapMarkerWarning2015.png" style="height:768px; width:1366px" /></p>

<p>At the same time, i can able to surf few of the local address of mine.</p>

<p>I am not sure about the exact reason. However i can advice to surf over few official releases</p>

<p><img alt="" class="img-thumbnail" src="../images/blog/GoogleMapMarkerWarning-1.png" style="height:768px; width:1366px" /></p>
',
        'blogAuthor' => '1',
        'blogDate' => '2015-05-12 06:54:26',
        'blogStatus' => '1',
        'status' => '0',
        'created_at' => '2015-09-30 18:26:21',
        'updated_at' => '2015-10-16 15:37:58',
    ),
    3 => 
    array (
        'id' => '4',
        'blogTitle' => 'Video Recording with voice is easy and simple ',
        'blogUrl' => 'Video-Recording-with-voice-is-easy-and-simple',
        'blogContent' => '<p>Last night I wanted to record a video with voice for a demo of my project. I really fear how i can do that. Then, I just remember about the same thing i did in the college. i.e., the project based on android in my Final year of the Course MCA.</p>

<p>&nbsp;</p>

<p>Then i simply surfed for the video recording software online. I got few and a software called as Debut Video Capture Software attracted me. I simply downloaded it and just recorded my desktop for a couple of minutes to find out the output size of the video because i will be uploading the output video in youtube for customer feedback. It works as expected.</p>

<p>&nbsp;</p>

<p>Then, the following i prepared for the video recoridng session and started it a while and after some 15 recordings the software just gave me an alert regarding expiration of validity, but i wanted to record another 2.</p>

<p>&nbsp;</p>

<p>Then i searched for the serial key and found it&nbsp;<em>41732100-uefacl&nbsp;</em>and here is the&nbsp;<a href="http://www.serialscore.com/nch-debut-video-capture-software-pro-1.82-serial-696.html">link</a>&nbsp;for it.</p>

<p>&nbsp;</p>

<p>And i presented those videos to the client and expereinced the simplicity in works&nbsp;<img alt=":)" src="http://localhost/ht-wp/wp-includes/images/smilies/simple-smile.png" /></p>
',
    'blogAuthor' => '1',
    'blogDate' => '2015-05-15 10:54:26',
    'blogStatus' => '1',
    'status' => '0',
    'created_at' => '2015-09-30 18:27:06',
    'updated_at' => '2015-10-16 15:36:55',
),
4 => 
array (
    'id' => '5',
    'blogTitle' => 'Introduction to PHP ',
    'blogUrl' => 'Introduction-to-PHP',
    'blogContent' => '<p>After posting few posts in Sysaxiom i felt that&nbsp;Though i know a little about PHP i would like to give a short intro about PHP before moving to future &nbsp;posts.</p>

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
    'blogAuthor' => '1',
    'blogDate' => '2015-05-18 09:44:26',
    'blogStatus' => '1',
    'status' => '0',
    'created_at' => '2015-09-30 18:32:15',
    'updated_at' => '2015-10-06 05:02:27',
),
5 => 
array (
    'id' => '6',
    'blogTitle' => 'How to Install and use PHP in your Machine ',
    'blogUrl' => 'How-to-Install-and-use-PHP-in-your-Machine',
    'blogContent' => '<p>After the short introduction of PHP, A Question should be raise.</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-05-28 11:15:26',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:33:07',
'updated_at' => '2015-09-30 18:33:07',
),
6 => 
array (
'id' => '7',
'blogTitle' => 'Why one should not use mysql functions ',
'blogUrl' => 'Why-one-should-not-use-mysql-functions',
'blogContent' => '<p>The MySQL is officially&nbsp;<a href="https://wiki.php.net/rfc/mysql_deprecation" target="_blank">depreciated</a>&nbsp;and will be completely removed in php 7.</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-06-01 20:04:26',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:34:21',
'updated_at' => '2015-10-16 15:36:11',
),
7 => 
array (
'id' => '8',
'blogTitle' => 'New Github Repository PHP – MySQL(i) All in One ',
'blogUrl' => 'New-Github-Repository-PHP-–-MySQL(i)-All-in-One',
'blogContent' => '<p>Yesterday, I had a plan to have a new repo which was in my mind for a while.</p>

<p>I just started with the New Repo which was very little but efficient and it covers all possible operations in PHP and MySqli in Object Oriented Style.</p>

<p>&nbsp;</p>

<p>Here&rsquo;s the Github&nbsp;<a href="https://github.com/sulthanallaudeen/PHP-MySQL-i-All-in-One" target="_blank">Link&nbsp;</a></p>
',
'blogAuthor' => '1',
'blogDate' => '2015-06-15 19:44:26',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:35:07',
'updated_at' => '2015-10-06 04:24:52',
),
8 => 
array (
'id' => '9',
'blogTitle' => 'Got 5k Reputation in Stackoverflow ',
'blogUrl' => 'Got-5k-Reputation-in-Stackoverflow',
'blogContent' => '<p>And this day (24th May 2015) I crossed 5000k Reputation in Stackoverflow. I feel really happy and i know it is not even a matter a there are many who got reputatoin Lakhs . However they are 6 years senior and i just got 1.</p>

<p>&nbsp;</p>

<p>As an update here is the Screenshot which would be fun if i see this in future.</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/05/so1.png"><img alt="so" class="img-thumbnail" src="../images/blog/StackOverflor5k.png" style="height:620px; width:1344px" /></a></p>

<p>&nbsp;</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-06-18 21:44:26',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:37:17',
'updated_at' => '2015-10-06 04:25:03',
),
9 => 
array (
'id' => '10',
'blogTitle' => 'How to Install Illuminate  HTML In Laravel 5 ',
'blogUrl' => 'How-to-Install-Illuminate-HTML-In-Laravel-5-',
'blogContent' => '<p>This post is because</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-06-20 04:34:26',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:39:51',
'updated_at' => '2015-10-16 15:35:56',
),
10 => 
array (
'id' => '11',
'blogTitle' => 'How to Install latest version of Laravel ',
'blogUrl' => 'How-to-Install-latest-version-of-Laravel',
'blogContent' => '<p><a href="http://laravel.com/docs/5.0" target="_blank">Here</a>&nbsp;is the Master Source &nbsp;where you can get it with more details, But let me give the lazy way which i follow</p>

<p><strong>Step 1 :</strong></p>

<p>Download&nbsp;<a href="https://getcomposer.org/" target="_blank">Composer</a>&nbsp;here&rsquo;s the window&rsquo;s&nbsp;<a href="https://getcomposer.org/Composer-Setup.exe" target="_blank">direct link</a></p>

<p><strong>Step 2 :&nbsp;</strong></p>

<p>Navigate to the folder where you need to install laravel</p>

<pre style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);">
composer create-project laravel/laravel</pre>

<p>The above command will directly install you the latest Laravel Framework</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-06-21 05:44:06',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:41:21',
'updated_at' => '2015-09-30 18:41:21',
),
11 => 
array (
'id' => '12',
'blogTitle' => 'Remove public  index.php from your Laravel Project in two steps ',
'blogUrl' => 'Remove-public-index.php-from-your-Laravel-Project-in-two-steps-',
'blogContent' => '<p>Here&rsquo;s the Simple 2 step way step &nbsp;to remove the&nbsp;<strong>pubic/index.php&nbsp;</strong>&nbsp;from your laravel project which gives you pretty url</p>

<p><strong>Step 1 :</strong></p>

<p>Rename the file&nbsp;<strong>server.php</strong>&nbsp;to&nbsp;<strong>index.php</strong>&nbsp;in your project root folder</p>

<p><strong>Step 2 :&nbsp;</strong></p>

<p>Move the&nbsp;<strong>.htaccess</strong>&nbsp;file from your&nbsp;<strong>public</strong>&nbsp;folder to root folder</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-06-24 02:24:06',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:41:48',
'updated_at' => '2015-09-30 21:25:07',
),
12 => 
array (
'id' => '13',
'blogTitle' => 'Multiplication of Time in PHP ',
'blogUrl' => 'Multiplication-of-Time-in-PHP',
'blogContent' => '<p>Today i crossed across a Question about Multiplying a Time using PHP Here&rsquo;s the&nbsp;<a href="http://stackoverflow.com/q/30555665/3282633" target="_blank">Link</a></p>

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
'blogAuthor' => '1',
'blogDate' => '2015-06-26 03:13:36',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:56:10',
'updated_at' => '2015-09-30 18:56:10',
),
13 => 
array (
'id' => '14',
'blogTitle' => 'GoogleMapsApi – Initial Release ',
'blogUrl' => 'GoogleMapsApi-–-Initial-Release',
'blogContent' => '<p>And Today i launched the GoogleMapsApi with minimal calls to Google Api in the app part of the Sysaxiom&rsquo;s app Place. i.e.,&nbsp;<a href="http://sysaxiom.com/apps" target="_blank">sysaxiom.com/apps</a></p>

<p>For the Initial Release i have used the minimal calls</p>

<p>It was designed with the latest pack of&nbsp;<a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3.4</a>&nbsp;and in the Backend with PHP. However i plan to use some other additional calls in the future days.</p>

<p>Here&rsquo;s the&nbsp;<a href="https://github.com/sulthanallaudeen/GoogleMapsApi" target="_blank">Github Link</a></p>

<p>Thanks for all.</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-06-28 06:34:04',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 18:56:45',
'updated_at' => '2015-10-16 15:39:15',
),
14 => 
array (
'id' => '15',
'blogTitle' => 'Background Tracker – How I made it myself ',
'blogUrl' => 'Background-Tracker-–-How-I-made-it-myself',
'blogContent' => '<p>Last Night i made a task by myself for one of my work, To track the details of users who attempts to login the admin panel. I plan to get the basic details such as Operating System, Ip Address, Browser Details and trigger to the List of Admin who are listed.</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-07-01 20:44:06',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:00:45',
'updated_at' => '2015-10-06 04:28:11',
),
15 => 
array (
'id' => '16',
'blogTitle' => 'How non-recommendation helped me ;) ',
'blogUrl' => 'How-non-recommendation-helped-me-;)',
'blogContent' => '<p>Previous day i had a which deals with some no sense.</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-07-03 21:34:06',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:02:16',
'updated_at' => '2015-09-30 21:23:46',
),
16 => 
array (
'id' => '17',
'blogTitle' => 'Encourage one to make it Better ! ',
'blogUrl' => 'Encourage-one-to-make-it-Better-!',
'blogContent' => '<p>Encourage one to Make it Better !!</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-07-07 00:44:56',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:02:44',
'updated_at' => '2015-10-16 15:39:36',
),
17 => 
array (
'id' => '18',
'blogTitle' => 'How Cute the Jquery is ! With Basic Operation which is lovable – Short Version ',
'blogUrl' => 'How-Cute-the-Jquery-is-!-With-Basic-Operation-which-is-lovable-–-Short-Version',
'blogContent' => '<p>Hello, Guys.</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-07-09 00:44:12',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:39:35',
'updated_at' => '2015-09-30 19:39:35',
),
18 => 
array (
'id' => '19',
'blogTitle' => 'How Cute the Jquery is ! With Basic Operation which is lovable – Story Version ',
'blogUrl' => 'How-Cute-the-Jquery-is-!-With-Basic-Operation-which-is-lovable-–-Story-Version',
'blogContent' => '<p>Hello, Guys.</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-07-11 02:34:33',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:48:57',
'updated_at' => '2015-09-30 19:48:57',
),
19 => 
array (
'id' => '20',
'blogTitle' => 'How to install Laravel Older Versions through Composer ',
'blogUrl' => 'How-to-install-Laravel-Older-Versions-through-Composer',
'blogContent' => '<p>How to install Laravel Older Versions through Composer</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-08-03 00:44:26',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:50:41',
'updated_at' => '2015-09-30 19:50:41',
),
20 => 
array (
'id' => '21',
'blogTitle' => 'Tricky File Upload, List and Delete ',
'blogUrl' => 'Tricky-File-Upload,-List-and-Delete',
'blogContent' => '<p>I got a &nbsp;mate named as&nbsp;<a href="http://stackoverflow.com/users/4842333/luigi" target="_blank">Luigi</a>&nbsp;who asked a question about uploading the files using php. I can understand that there few mistakes in his code and i helped him to complete it which extends to listing the files inside the sub directory,</p>

<p>&nbsp;</p>

<p>And today he needs to delete those files &nbsp;which looks a good snacks for me. So i gave him a little brief answer which i don&rsquo;t want to repeat it again here.</p>

<p>Here&rsquo;s the&nbsp;<a href="http://stackoverflow.com/q/31232594/3282633" target="_blank">Question</a>&nbsp;and&nbsp;<a href="http://stackoverflow.com/a/31234250/3282633">Answer</a></p>

<p>Here&rsquo;s the&nbsp;<a href="https://eval.in/393049" target="_blank">Eval of the Code</a>&nbsp;Here&rsquo;s the updated&nbsp;<a href="http://jsfiddle.net/allaudeen/rrpbuov2/" target="_blank">Fiddle</a>&nbsp;(Updated on 14th July 2015)</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-08-07 01:34:28',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:51:32',
'updated_at' => '2015-10-16 15:40:04',
),
21 => 
array (
'id' => '22',
'blogTitle' => 'Strange behaviour of Laravel Sessions and How I overcome it. ',
'blogUrl' => 'Strange-behaviour-of-Laravel-Sessions-and-How-I-overcome-it.',
'blogContent' => '<p>I recently met a strange behaviour from laravel where i am getting logged out in certain minutes, though i have set the expiration of the session<br />
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
'blogAuthor' => '1',
'blogDate' => '2015-08-23 03:26:17',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:52:25',
'updated_at' => '2015-10-16 15:40:13',
),
22 => 
array (
'id' => '23',
'blogTitle' => 'My First Cross Origin Script ',
'blogUrl' => 'My-First-Cross-Origin-Script',
'blogContent' => '<p>Today i found a cool personal website and i was really wondered with the design, While seeing the other pages, i found that the admin used ajax calls for the testimonial kind of section, after digging the console i found that it was unsecured ajax call.</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-08-28 21:46:17',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:53:14',
'updated_at' => '2015-10-16 15:40:21',
),
23 => 
array (
'id' => '24',
'blogTitle' => 'Recommendation of Crayon Syntax Highlighter ',
'blogUrl' => 'Recommendation-of-Crayon-Syntax-Highlighter',
'blogContent' => '<p>So far for all the codes that were embedded i have used&nbsp;<a href="https://wordpress.org/plugins/syntaxhighlighter/" target="_blank">SyntaxHighlighter</a>&nbsp;where i found so many difficulties and after using the&nbsp;<a href="https://github.com/aramk/crayon-syntax-highlighter" target="_blank">Crayon Syntax Highlighter</a>&nbsp;i really feel good and it makes many things easier. I recommend this plugin to use if you deal with the combination wordpress + code</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-09-01 00:01:41',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:54:17',
'updated_at' => '2015-10-16 15:40:28',
),
24 => 
array (
'id' => '25',
'blogTitle' => 'Is goto in PHP Evil ',
'blogUrl' => 'Is-goto-in-PHP-Evil',
'blogContent' => '<p>I really know that i am mad lover of goto, but i really wonder why many of the people hate it (Even many of my office mates).</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-09-02 23:26:41',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:54:47',
'updated_at' => '2015-10-16 15:40:35',
),
25 => 
array (
'id' => '26',
'blogTitle' => 'Plan for Task Scheduler ',
'blogUrl' => 'Plan-for-Task-Scheduler',
'blogContent' => '<p>After few Projects and little House-Keeping works i have a plan to develop a Task Scheduler in Laravel 5 and AngularJS. Let me fork and convey the other details in following posts !</p>

<p>&nbsp;</p>

<p>Cheers&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>
',
'blogAuthor' => '1',
'blogDate' => '2015-09-09 21:26:12',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 19:55:10',
'updated_at' => '2015-10-06 04:35:07',
),
26 => 
array (
'id' => '27',
'blogTitle' => 'How to create App in Heroku in 4 Steps ',
'blogUrl' => 'How-to-create-App-in-Heroku-in-4-Steps',
'blogContent' => '<p>I was wondering and trying to make use of Heroku since my days in Vel Tech where i attempted to build some<br />
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
'blogAuthor' => '1',
'blogDate' => '2015-09-19 21:56:41',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 20:31:33',
'updated_at' => '2015-10-08 03:44:02',
),
27 => 
array (
'id' => '28',
'blogTitle' => 'Javascript is good boy too ! ',
'blogUrl' => 'Javascript-is-good-boy-too-!',
'blogContent' => '<p>While developing the TaskManagerApp i am planning it with simple and efficient actions,</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-09-23 11:26:41',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 20:31:33',
'updated_at' => '2015-10-06 04:34:09',
),
28 => 
array (
'id' => '29',
'blogTitle' => 'Goolge’s New Logo ',
'blogUrl' => 'Goolge’s-New-Logo',
'blogContent' => '<p>Yes, Google&rsquo;s logo updated&nbsp;<a href="http://googleblog.blogspot.in/2015/09/google-update.html" target="_blank">on the fly</a>, i wonder to see&nbsp;<a href="https://en.wikipedia.org/wiki/Sundar_Pichai" target="_blank">Mr.Sundar Pichai</a>&lsquo;s comment at first also you can see&nbsp;<a href="https://plus.google.com/+SuLtHaNAlLaUdeEn/posts/M6FHyGXmsCF" target="_blank">mine there.</a></p>

<p>Here&rsquo;s the animated logo</p>

<p><a href="http://sysaxiom.com/wp-content/uploads/2015/09/OGB-INSIDER-BLOGS-GoogleLogox2-Animated.gif"><img alt="OGB-INSIDER-BLOGS-GoogleLogox2-Animated" class="img-thumbnail" src="../images/blog/Google-Logo-Animated.gif" style="height:169px; width:300px" /></a></p>

<p>&nbsp;</p>

<p>Cheer&rsquo;s !</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-09-28 17:46:41',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 20:34:15',
'updated_at' => '2015-10-08 03:40:23',
),
29 => 
array (
'id' => '30',
'blogTitle' => ' Google App Script -> Which makes you feel Great !! ',
'blogUrl' => '-Google-App-Script-->-Which-makes-you-feel-Great-!!',
'blogContent' => '<p>Hello !!</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-10-01 07:46:41',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-09-30 20:34:42',
'updated_at' => '2015-10-08 03:38:59',
),
30 => 
array (
'id' => '31',
'blogTitle' => 'Think before you Build ',
'blogUrl' => 'Think-before-you-Build',
'blogContent' => '<p>Few days i have to build a App name as Match Predicor. I wanted to use AngularJS, CSS with any Framework.&nbsp;</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-10-19 10:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-11-01 05:50:20',
'updated_at' => '2015-11-05 20:34:32',
),
31 => 
array (
'id' => '32',
'blogTitle' => 'Increase your confidence. Defeat your past. Don\'t set limit ',
'blogUrl' => 'Increase-your-confidence.-Defeat-your-past.-Don\'t-set-limit',
'blogContent' => '<p>You know what. I am really lucky to be myself.&nbsp;</p>

<p>I love the changes, behaviour, attitude and everything from me. I can see the goodness and the willingness to learn.&nbsp;</p>

<p>To be honest, i do love my computer very much than any other things, which automatically attracts me to learn much things better.&nbsp;</p>

<p><strong>Never limit yourself</strong></p>

<p><strong>&nbsp;&nbsp;&nbsp;</strong>Never rest your mind by the way of earning more money with less work. Even if you got low or high salary, if you have the will to learn you will&nbsp;do it.&nbsp;</p>

<p>&nbsp; &nbsp;It doesn&#39;t matter how much experience you got in terms of years, but it matters what you did&nbsp;in those period.&nbsp;</p>

<p>&nbsp; &nbsp;Always do innovative things, create awesomeness, explore the best, achieve the best and make yourself better. If you do so, you don&#39;t need to sell yourself, you will be identified by the right person who really needs you.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Cheers !!</strong></p>
',
'blogAuthor' => '1',
'blogDate' => '2015-10-23 10:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-11-01 05:50:59',
'updated_at' => '2015-11-05 20:34:55',
),
32 => 
array (
'id' => '33',
'blogTitle' => 'Cordova :: The Platform which makes web dev to dive into mobile ',
'blogUrl' => 'Cordova-::-The-Platform-which-makes-web-dev-to-dive-into-mobile',
'blogContent' => '<p>Firstly, I thank Mr.Suresh who always gives me the opportunity to learn, I always prefer to learn new things and do innovate works whereever i go.&nbsp;</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-11-01 10:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-11-01 05:51:24',
'updated_at' => '2015-11-05 20:35:19',
),
33 => 
array (
'id' => '34',
'blogTitle' => 'First Windows App Development',
'blogUrl' => 'First-Windows-App-Developmen',
'blogContent' => '<p>Yeah, This was the day i created First Windows App, though it was a hybrid one, i faced lots of challenges to reach it, Here i am giving it in short</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-11-13 00:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-11-04 04:00:50',
'updated_at' => '2015-11-04 04:01:31',
),
34 => 
array (
'id' => '35',
'blogTitle' => 'Laravel Middleware - Short Intro',
'blogUrl' => 'Laravel-Middleware---Short-Intr',
'blogContent' => '<p>This is the post about Laravel&#39;s Middleware</p>

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
'blogAuthor' => '1',
'blogDate' => '2015-11-15 00:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-11-05 19:03:17',
'updated_at' => '2015-11-05 19:03:53',
),
35 => 
array (
'id' => '36',
'blogTitle' => 'Time to Shift yeah i got job in Chennai Again ',
'blogUrl' => 'Time-to-Shift-yeah-i-got-job-in-Chennai-Again',
'blogContent' => '<p>Yeah, i am stepping into my 3rd Year in Work.&nbsp;</p>

<p>Absolutely it means i have completed 2 year of working experience (Mostly php :p)</p>

<p>Now, i got an offer from Chennai, I planned a lot in this period but i wanted to, and i expect the place i join to co-ordinate.</p>

<p>Yes, it should.. To server the company and grow along with it, is the motto in my resume ;)</p>

<p>Well, only 1 more day to go from Old Company and i shall proceed with the shifting process, Nov 16th is the joining date in New Company, I shall tell a lot about New Company soon !!</p>
',
'blogAuthor' => '1',
'blogDate' => '2015-11-18 00:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2015-11-13 09:13:04',
'updated_at' => '2015-11-13 09:15:18',
),
36 => 
array (
'id' => '37',
'blogTitle' => 'Chosen Select and Input old Laravel',
'blogUrl' => 'Chosen-Select-and-Input-old-Larave',
'blogContent' => '<p>Writing this Post after long time, which would help others if they use Chosen Menu</p>

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
'blogAuthor' => '1',
'blogDate' => '2016-02-12 10:10:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2016-02-11 16:10:21',
'updated_at' => '2016-02-11 16:10:21',
),
37 => 
array (
'id' => '38',
'blogTitle' => 'Installing Composer for xampp in Ubuntu',
'blogUrl' => 'Installing-Composer-for-xampp-in-Ubuntu',
'blogContent' => '<p>If you look for a way to install Composer for the machine which is powered with xampp, then here are the tweaks that you shall do.</p>

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
'blogAuthor' => '1',
'blogDate' => '2016-02-20 10:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2016-02-17 15:06:06',
'updated_at' => '2016-02-17 15:06:06',
),
38 => 
array (
'id' => '39',
'blogTitle' => 'How to auth logout in laravel 5.2',
'blogUrl' => 'How-to-auth-logout-in-laravel-5.2',
'blogContent' => '<p>This is just a quick note on how to logout the user if he is using Auth in Laravel 5.2</p>

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
'blogAuthor' => '1',
'blogDate' => '2016-03-11 11:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2016-03-08 17:28:03',
'updated_at' => '2016-03-08 17:28:03',
),
39 => 
array (
'id' => '40',
'blogTitle' => 'Linux Ubuntu 16.04 Macbuntu Look',
'blogUrl' => 'Linux-Ubuntu-16.04-Macbuntu-Look',
'blogContent' => '<p>I always love Ubuntu. After the firstday download of Ubuntu 16.04 i tried to change its look like mac, however i couldn&#39;t found few packages, but after noobslab announcement of Macbuntu look, i suddenly changed the look within minutes.. Here&#39;s the preview&nbsp;<img alt="" src="http://sulthanallaudeen.com/images/Macbuntu-16.04-1.png" class=\'img-thumbnail\' /></p>

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
'blogAuthor' => '1',
'blogDate' => '2016-04-30 10:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2016-04-28 18:14:04',
'updated_at' => '2016-04-28 18:18:52',
),
40 => 
array (
'id' => '41',
'blogTitle' => 'E: Could not get lock lock open (11 Resource temporarily unavailable)',
'blogUrl' => 'E:-Could-not-get-lock-lock-open-(11-Resource-temporarily-unavailable)',
'blogContent' => '<p>You would get this message few times, while you abort the download in your linux based machine.&nbsp;</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>E: Could not get lock /var/lib/dpkg/lock - open (11 Resource temporarily unavailable)</code><br />
<code>E: Unable to lock the administration directory (/var/lib/dpkg/) is another process using it? &nbsp;</code></div>

<p>and that is not a risky thing to clear it.&nbsp;</p>

<p>The reason is beause of the lock placed during installation, Here&#39;s how you can do that .</p>

<p>Open the terminal and type the following commands,</p>

<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>sudo rm /var/lib/apt/lists/lock</code><br />
<code>sudo rm /var/cache/apt/archives/lock</code></div>
',
'blogAuthor' => '1',
'blogDate' => '2016-05-01 10:00:00',
'blogStatus' => '1',
'status' => '0',
'created_at' => '2016-04-29 14:50:24',
'updated_at' => '2016-04-29 14:52:19',
),
));
        
        
    }
}
