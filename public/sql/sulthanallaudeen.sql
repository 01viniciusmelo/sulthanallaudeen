-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2016 at 08:20 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sulthanallaudeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blogTitle` varchar(200) NOT NULL,
  `blogUrl` varchar(500) NOT NULL,
  `blogContent` longtext NOT NULL,
  `blogAuthor` int(11) NOT NULL,
  `blogDate` datetime NOT NULL,
  `blogStatus` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogTitle`, `blogUrl`, `blogContent`, `blogAuthor`, `blogDate`, `blogStatus`, `created_at`, `updated_at`) VALUES
(1, 'First Post ', 'First-Post', '<p>This is the First Post of Sysaxiom after the wordpress Installation on 20th May 2015.</p>\n\n<p>This installation should be some 100th installation of various applications within sysaxiom.</p>\n', 1, '2014-05-01 20:55:05', 1, '2015-09-30 19:32:21', '2015-10-01 05:27:57'),
(2, 'Simple jquery ajax call to a .txt file ', 'Simple-jquery-ajax-call-to-a-.txt-file', '<p>Here&rsquo;s the simple ajax call to the text file which would return the content the targeted text fil</p>\n\n<p><strong>Step 1 :</strong>&nbsp;Create a new .php and .txt file</p>\n\n<p><strong>Step 2 :</strong>&nbsp;In the .php file include the jquery minimal version</p>\n\n<pre>\n\n&nbsp;</pre>\n\n<p><strong>Step 3 :</strong>&nbsp;Introduce a trigger and a result area</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n\n&nbsp;</pre>\n\n<div id="trigger">Get the Result</div>\n\n<div id="result">&nbsp;</div>\n</div>\n\n<p><strong>Step 4 :</strong>&nbsp;Write a jquery click event</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n$(&quot;#trigger&quot;).click(function(){\n// ajax call here\n});</pre>\n</div>\n\n<p><strong>Step 5 :</strong>&nbsp;Place the ajax call over there</p>\n\n<pre>\n$.ajax({url: &quot;demo_test.txt&quot;, success: function(result){\n$(&quot;#result&quot;).html(result);\n}});</pre>\n\n<p>And you&rsquo;re done !!</p>\n\n<p><strong>Here&rsquo;s the code that you look for&nbsp;:&nbsp;</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Well, i won&rsquo;t say how to create a text file and put content inside it !!</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 1, '2015-05-03 21:46:34', 1, '2015-10-01 06:54:21', '2015-10-06 17:16:44'),
(3, 'Google Maps Marker Shutsdown temporarily starting from 12th may 2015 ', 'Google-Maps-Marker-Shutsdown-temporarily-starting-from-12th-may-2015', '<p>After pranksters used Google Map Maker to draw an&nbsp;<a href="http://thenextweb.com/google/2015/04/24/theres-an-android-peeing-on-apple-on-google-maps-and-we-cant-figure-out-why/">Android peeing on an Apple Logo</a>&nbsp;and engage in other acts of spammy vandalism, Google&nbsp;<a href="https://productforums.google.com/forum/#!category-topic/map-maker/news-and-announcements/crFEbGXJ-HI">has announced</a>&nbsp;that it will temporarily shut down its online map editor while it rethinks its approval process.</p>\n\n<p>&nbsp;</p>\n\n<p>Here is the screen that i have experienced few moments ago.</p>\n\n<p><img alt="" class="img-thumbnail" src="../images/blog/GoogleMapMarkerWarning2015.png" style="height:768px; width:1366px" /></p>\n\n<p>At the same time, i can able to surf few of the local address of mine.</p>\n\n<p>I am not sure about the exact reason. However i can advice to surf over few official releases</p>\n\n<p><img alt="" class="img-thumbnail" src="../images/blog/GoogleMapMarkerWarning-1.png" style="height:768px; width:1366px" /></p>\n', 1, '2015-05-12 06:54:26', 1, '2015-10-01 06:56:21', '2015-10-17 04:07:58'),
(4, 'Video Recording with voice is easy and simple ', 'Video-Recording-with-voice-is-easy-and-simple', '<p>Last night I wanted to record a video with voice for a demo of my project. I really fear how i can do that. Then, I just remember about the same thing i did in the college. i.e., the project based on android in my Final year of the Course MCA.</p>\n\n<p>&nbsp;</p>\n\n<p>Then i simply surfed for the video recording software online. I got few and a software called as Debut Video Capture Software attracted me. I simply downloaded it and just recorded my desktop for a couple of minutes to find out the output size of the video because i will be uploading the output video in youtube for customer feedback. It works as expected.</p>\n\n<p>&nbsp;</p>\n\n<p>Then, the following i prepared for the video recoridng session and started it a while and after some 15 recordings the software just gave me an alert regarding expiration of validity, but i wanted to record another 2.</p>\n\n<p>&nbsp;</p>\n\n<p>Then i searched for the serial key and found it&nbsp;<em>41732100-uefacl&nbsp;</em>and here is the&nbsp;<a href="http://www.serialscore.com/nch-debut-video-capture-software-pro-1.82-serial-696.html">link</a>&nbsp;for it.</p>\n\n<p>&nbsp;</p>\n\n<p>And i presented those videos to the client and expereinced the simplicity in works&nbsp;<img alt=":)" src="http://localhost/ht-wp/wp-includes/images/smilies/simple-smile.png" /></p>\n', 1, '2015-05-15 10:54:26', 1, '2015-10-01 06:57:06', '2015-10-17 04:06:55'),
(5, 'Introduction to PHP ', 'Introduction-to-PHP', '<p>After posting few posts in Sysaxiom i felt that&nbsp;Though i know a little about PHP i would like to give a short intro about PHP before moving to future &nbsp;posts.</p>\n\n<p><strong>Intro :&nbsp;</strong></p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;</strong>If you&nbsp;<a href="https://www.google.co.in/search?q=What+is+php" target="_blank">Search</a>&nbsp;you can straight away found the below given screen which itself stands a little explanation.</p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/05/whatisphp.png"><img alt="whatisphp" class="img-thumbnail" src="../images/blog/whatisphp.png" style="height:438px; width:826px" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>As &nbsp;of&nbsp;<a href="http://php.net/" target="_blank">php&rsquo;s official website</a>&nbsp;:</p>\n\n<p>PHP is a popular general-purpose scripting language that is especially suited to web development.</p>\n\n<p>Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>\n\n<p>&nbsp;</p>\n\n<p>It&rsquo;s really a super cool language and&nbsp;<a href="https://www.google.co.in/#q=php+created+by" target="_blank">PHP is created</a>&nbsp;&nbsp;by&nbsp;<a href="http://lerdorf.com/bio/" target="_blank">Rasmuc Lerdorf</a>&nbsp;and is now ~ maintained by Andy Gutman and Zeev Suraski. You can find more at&nbsp;<a href="http://en.wikipedia.org/wiki/PHP" target="_blank">Wiki</a>.</p>\n\n<p><strong>Here are some resources to learn php&nbsp;</strong></p>\n\n<p>1. Official Website of PHP &ndash;&nbsp;<a href="http://php.net/" target="_blank">php.net</a></p>\n\n<p>2. PHP The Right Way &ndash;&nbsp;<a href="http://www.phptherightway.com/" target="_blank">http://www.phptherightway.com/</a></p>\n\n<p>3. Tutorialspont &ndash;&nbsp;<a href="http://www.tutorialspoint.com/php/" target="_blank">http://www.tutorialspoint.com/php/</a></p>\n', 1, '2015-05-18 09:44:26', 1, '2015-10-01 07:02:15', '2015-10-06 17:32:27'),
(6, 'How to Install and use PHP in your Machine ', 'How-to-Install-and-use-PHP-in-your-Machine', '<p>After the short introduction of PHP, A Question should be raise.</p>\n\n<p><strong>How to use PHP in my machine ?</strong></p>\n\n<p>Yes, Obviously there should be.</p>\n\n<p>What ever the Operating System you running XAMPP is always there to support you.</p>\n\n<p>&nbsp;</p>\n\n<p>XAMPP is a free and open source cross platform web server solution package. It is a bundle that consists of the following Bundles.</p>\n\n<p>&nbsp;</p>\n\n<p>X &ndash; Cross Platform</p>\n\n<p>A &ndash; Apache</p>\n\n<p>M &ndash; MySQL</p>\n\n<p>P &ndash; PHP</p>\n\n<p>P &ndash; PERL</p>\n\n<p>Ofcourse, &nbsp;I have done few video tutorials, screenshots on how to install XAMPP in Windows and Linux. This time i shall recommend Wikihow articles which explains Installing&nbsp;<a href="http://www.wikihow.com/Install-XAMPP-for-Windows" target="_blank">XAMPP on Windows</a>&nbsp;and&nbsp;<a href="http://www.wikihow.com/Install-XAMPP-on-Linux" target="_blank">Linux</a>.</p>\n\n<p>&nbsp;</p>\n\n<p>There are many options in the operating system which enables you to auto start the xampp service whenever you turn on the operating system. You shall enable and enjoy that feature too.</p>\n\n<p>And&nbsp;<a href="http://www.phpmyadmin.net/home_page/index.php" target="_blank">phpMyAdmin</a>&nbsp;is a great tool to handle your database &ndash; MySQL and i give a tip to change your&nbsp;<a href="http://www.phpmyadmin.net/home_page/themes.php" target="_blank">theme</a>&nbsp;and give your admin a classic look.</p>\n\n<p>&nbsp;</p>\n\n<p>People say to use</p>\n\n<p>Wampp on Windows</p>\n\n<p>Lampp on Linux</p>\n\n<p>Mampp on Mac</p>\n\n<p>&nbsp;</p>\n\n<p>But I always prefer XAMPP Everywhere, Because why should i pluck the seeds when already it was collected in the pot&nbsp;<img alt=":)" src="http://localhost/ht-wp/wp-includes/images/smilies/simple-smile.png" /></p>\n', 1, '2015-05-28 11:15:26', 1, '2015-10-01 07:03:07', '2015-10-01 07:03:07'),
(7, 'Why one should not use mysql functions ', 'Why-one-should-not-use-mysql-functions', '<p>The MySQL is officially&nbsp;<a href="https://wiki.php.net/rfc/mysql_deprecation" target="_blank">depreciated</a>&nbsp;and will be completely removed in php 7.</p>\n\n<p>&nbsp;</p>\n\n<p>You can see the below given warning message in all posts of&nbsp;<a href="http://php.net/manual/en/function.mysql-affected-rows.php" target="_blank">mysql functions</a>&nbsp;in the php.net website.</p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/05/mysql_depreciated.png"><img alt="mysql_depreciated" class="img-thumbnail" src="../images/blog/mysql_depreciated.png" style="height:194px; width:848px" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>i.e.,</p>\n\n<p><strong>Warning :&nbsp;</strong></p>\n\n<p>This extension is deprecated as of PHP 5.5.0, and will be removed in the future. Instead, the<a href="http://php.net/manual/en/book.mysqli.php">MySQLi</a>&nbsp;or&nbsp;<a href="http://php.net/manual/en/ref.pdo-mysql.php">PDO_MySQL</a>&nbsp;extension should be used. See also&nbsp;<a href="http://php.net/manual/en/mysqlinfo.api.choosing.php">MySQL: choosing an API</a>&nbsp;guide and<a href="http://php.net/manual/en/faq.databases.php#faq.databases.mysql.deprecated">related FAQ</a>&nbsp;for more information. Alternatives to this function include:</p>\n\n<ul>\n	<li><a href="http://php.net/manual/en/mysqli.affected-rows.php">mysqli_affected_rows()</a></li>\n	<li><a href="http://php.net/manual/en/pdostatement.rowcount.php">PDOStatement::rowCount()</a></li>\n</ul>\n\n<p><a href="http://stackoverflow.com/a/12860046/3282633" target="_blank">Here</a>&nbsp;is the beautiful answer about this topic.</p>\n\n<p>&nbsp;</p>\n\n<p>And to be honest, I suggest everyone to use mysqli&rsquo;s Object Oriented Style and it will make your code and you smart. And Never stick to w3school&rsquo;s procedural style as it might make you to think less&nbsp;<img alt=":)" src="http://localhost/ht-wp/wp-includes/images/smilies/simple-smile.png" /></p>\n', 1, '2015-06-01 20:04:26', 1, '2015-10-01 07:04:21', '2015-10-17 04:06:11'),
(8, 'New Github Repository PHP – MySQL(i) All in One ', 'New-Github-Repository-PHP-–-MySQL(i)-All-in-One', '<p>Yesterday, I had a plan to have a new repo which was in my mind for a while.</p>\n\n<p>I just started with the New Repo which was very little but efficient and it covers all possible operations in PHP and MySqli in Object Oriented Style.</p>\n\n<p>&nbsp;</p>\n\n<p>Here&rsquo;s the Github&nbsp;<a href="https://github.com/sulthanallaudeen/PHP-MySQL-i-All-in-One" target="_blank">Link&nbsp;</a></p>\n', 1, '2015-06-15 19:44:26', 1, '2015-10-01 07:05:07', '2015-10-06 16:54:52'),
(9, 'Got 5k Reputation in Stackoverflow ', 'Got-5k-Reputation-in-Stackoverflow', '<p>And this day (24th May 2015) I crossed 5000k Reputation in Stackoverflow. I feel really happy and i know it is not even a matter a there are many who got reputatoin Lakhs . However they are 6 years senior and i just got 1.</p>\n\n<p>&nbsp;</p>\n\n<p>As an update here is the Screenshot which would be fun if i see this in future.</p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/05/so1.png"><img alt="so" class="img-thumbnail" src="../images/blog/StackOverflor5k.png" style="height:620px; width:1344px" /></a></p>\n\n<p>&nbsp;</p>\n', 1, '2015-06-18 21:44:26', 1, '2015-10-01 07:07:17', '2015-10-06 16:55:03'),
(10, 'How to Install Illuminate  HTML In Laravel 5 ', 'How-to-Install-Illuminate-HTML-In-Laravel-5-', '<p>This post is because</p>\n\n<p>I can able to see many users stuck up with installing&nbsp;<strong>illuminate/HTML</strong>&nbsp;Form helpers in&nbsp;<strong>Laravel 5</strong>.</p>\n\n<p>In the previous version this helper comes by default, as a measure of making the Framework less size, they wanted the users to install this by themselves.</p>\n\n<p>Here are the steps to Install illuminate/HTML Form Helpers in Laravel5</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Step 1 :&nbsp;</strong></p>\n\n<p>Navigate to your project folder using composer run the following query</p>\n\n<pre>\ncomposer require &quot;illuminate/html&quot;:&quot;5.0.*&quot;</pre>\n\n<p><strong>Step 2 :&nbsp;</strong>Open the&nbsp;<strong>app.php&nbsp;</strong>file and add the below service providers</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n&#39;providers&#39; =&gt; [\n    	...\n		 &#39;Illuminate\\Html\\HtmlServiceProvider&#39;,\n    		]\n&#39;aliases&#39; =&gt; [\n		&#39;Form&#39;=&gt; &#39;Illuminate\\Html\\FormFacade&#39;, \n		&#39;HTML&#39;=&gt; &#39;Illuminate\\Html\\HtmlFacade&#39;,\n    		]   </pre>\n</div>\n\n<p>Now,&nbsp;it&lsquo;s&nbsp;all&nbsp;set.&nbsp;You&nbsp;can&nbsp;check&nbsp;it&nbsp;by&nbsp;For&nbsp;css&nbsp; and Js By&nbsp;:</p>\n\n<pre>\n{!! HTML::style(&#39;css/style.css&#39;) !!}\n{!! HTML::script(&#39;js/script.js&#39;); !!}</pre>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 1, '2015-06-20 04:34:26', 1, '2015-10-01 07:09:51', '2015-10-17 04:05:56'),
(11, 'How to Install latest version of Laravel ', 'How-to-Install-latest-version-of-Laravel', '<p><a href="http://laravel.com/docs/5.0" target="_blank">Here</a>&nbsp;is the Master Source &nbsp;where you can get it with more details, But let me give the lazy way which i follow</p>\n\n<p><strong>Step 1 :</strong></p>\n\n<p>Download&nbsp;<a href="https://getcomposer.org/" target="_blank">Composer</a>&nbsp;here&rsquo;s the window&rsquo;s&nbsp;<a href="https://getcomposer.org/Composer-Setup.exe" target="_blank">direct link</a></p>\n\n<p><strong>Step 2 :&nbsp;</strong></p>\n\n<p>Navigate to the folder where you need to install laravel</p>\n\n<pre style="border: 1px solid rgb(204, 204, 204); padding: 5px 10px; background: rgb(238, 238, 238);">\ncomposer create-project laravel/laravel</pre>\n\n<p>The above command will directly install you the latest Laravel Framework</p>\n', 1, '2015-06-21 05:44:06', 1, '2015-10-01 07:11:21', '2015-10-01 07:11:21'),
(12, 'Remove public  index.php from your Laravel Project in two steps ', 'Remove-public-index.php-from-your-Laravel-Project-in-two-steps-', '<p>Here&rsquo;s the Simple 2 step way step &nbsp;to remove the&nbsp;<strong>pubic/index.php&nbsp;</strong>&nbsp;from your laravel project which gives you pretty url</p>\n\n<p><strong>Step 1 :</strong></p>\n\n<p>Rename the file&nbsp;<strong>server.php</strong>&nbsp;to&nbsp;<strong>index.php</strong>&nbsp;in your project root folder</p>\n\n<p><strong>Step 2 :&nbsp;</strong></p>\n\n<p>Move the&nbsp;<strong>.htaccess</strong>&nbsp;file from your&nbsp;<strong>public</strong>&nbsp;folder to root folder</p>\n', 1, '2015-06-24 02:24:06', 1, '2015-10-01 07:11:48', '2015-10-01 09:55:07'),
(13, 'Multiplication of Time in PHP ', 'Multiplication-of-Time-in-PHP', '<p>Today i crossed across a Question about Multiplying a Time using PHP Here&rsquo;s the&nbsp;<a href="http://stackoverflow.com/q/30555665/3282633" target="_blank">Link</a></p>\n\n<p>After a small research 5 minutes i wrote the&nbsp;<a href="http://stackoverflow.com/a/30555780/3282633" target="_blank">answer</a></p>\n\n<p>Here is what you should do</p>\n\n<p><strong>Step 1 :</strong>&nbsp;Convert your hours into seconds</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n<code>$seconds = strtotime(&quot;1970-01-01 $maritime UTC&quot;)</code></pre>\n</div>\n\n<p><strong>Step 2 :</strong>&nbsp;Multiply it directly</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n<code>$multiply = $seconds * 5;</code></pre>\n</div>\n\n<p><strong>Step 3 :</strong>&nbsp;Convert the seconds back to hours, And you&rsquo;re done !</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n<code>echo gmdate(&quot;d H:i:s&quot;,$multiply);</code></pre>\n</div>\n\n<p>So Your final code shall be</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n<code>&lt;?php\n$maritime =&#39;01:10:00&#39;;\n$seconds = strtotime(&quot;1970-01-01 $maritime UTC&quot;);\n$multiply = $seconds * 5;  #Here you can multiply with your dynamic value\necho gmdate(&quot;d H:i:s&quot;,$multiply);</code></pre>\n</div>\n\n<p>And Everything goes, ok.. After few minutes the OP commented me, &ldquo;If i Multiply 25 times&rdquo; then he can&rsquo;t able to get the expected output. When i test i found that the gmdate gives the ouput like 1 day xx hours xx minutes and xx seconds Mean while the User&nbsp;<a href="http://stackoverflow.com/users/3933332/rizier123" target="_blank">Rizer</a>&nbsp;question me with this&nbsp;<a href="https://eval.in/373221" target="_blank">link</a>, that the OP seems to get the answer in raw time, Then again i started the research and ended with the code which is made upon DateTime</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n<code>&lt;?php\n$maritime =&#39;01:10:00&#39;;\n$seconds = strtotime(&quot;1970-01-01 $maritime UTC&quot;);\n$multiply = $seconds * 25;  #Here you can multiply with your dynamic value\n$seconds = $multiply;\n$zero    = new DateTime(&quot;@0&quot;);\n$offset  = new DateTime(&quot;@$seconds&quot;);\n$diff    = $zero-&gt;diff($offset);\necho sprintf(&quot;%02d:%02d:%02d&quot;, $diff-&gt;days * 24 + $diff-&gt;h, $diff-&gt;i, $diff-&gt;s);\n?&gt;</code></pre>\n</div>\n\n<p>Here are the Eval&nbsp;<a href="https://eval.in/373216" target="_blank">Link1</a>&nbsp;and&nbsp;<a href="https://eval.in/373224" target="_blank">Link2</a></p>\n', 1, '2015-06-26 03:13:36', 1, '2015-10-01 07:26:10', '2015-10-01 07:26:10'),
(14, 'GoogleMapsApi – Initial Release ', 'GoogleMapsApi-–-Initial-Release', '<p>And Today i launched the GoogleMapsApi with minimal calls to Google Api in the app part of the Sysaxiom&rsquo;s app Place. i.e.,&nbsp;<a href="http://sysaxiom.com/apps" target="_blank">sysaxiom.com/apps</a></p>\n\n<p>For the Initial Release i have used the minimal calls</p>\n\n<p>It was designed with the latest pack of&nbsp;<a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3.4</a>&nbsp;and in the Backend with PHP. However i plan to use some other additional calls in the future days.</p>\n\n<p>Here&rsquo;s the&nbsp;<a href="https://github.com/sulthanallaudeen/GoogleMapsApi" target="_blank">Github Link</a></p>\n\n<p>Thanks for all.</p>\n', 1, '2015-06-28 06:34:04', 1, '2015-10-01 07:26:45', '2015-10-17 04:09:15'),
(15, 'Background Tracker – How I made it myself ', 'Background-Tracker-–-How-I-made-it-myself', '<p>Last Night i made a task by myself for one of my work, To track the details of users who attempts to login the admin panel. I plan to get the basic details such as Operating System, Ip Address, Browser Details and trigger to the List of Admin who are listed.</p>\n\n<p><strong>Step 1 :&nbsp;</strong></p>\n\n<p>To get the basic details of the Users&rsquo;s which i listed above, i &nbsp;used the following script (Which gained me several rep in Stackoverflow in the beginning days)</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<p>function GetDetails()<br />\n{<br />\n$u_agent = $_SERVER[&#39;HTTP_USER_AGENT&#39;];<br />\n$bname = &#39;Unknown&#39;;<br />\n$platform = &#39;Unknown&#39;;<br />\n$version= &quot;&quot;;</p>\n\n<p>//First get the platform?<br />\nif (preg_match(&#39;/linux/i&#39;, $u_agent)) {<br />\n$platform = &#39;linux&#39;;<br />\n}<br />\nelseif (preg_match(&#39;/macintosh|mac os x/i&#39;, $u_agent)) {<br />\n$platform = &#39;mac&#39;;<br />\n}<br />\nelseif (preg_match(&#39;/windows|win32/i&#39;, $u_agent)) {<br />\n$platform = &#39;windows&#39;;<br />\n}</p>\n\n<p>// Next get the name of the useragent yes seperately and for good reason<br />\nif(preg_match(&#39;/MSIE/i&#39;,$u_agent) &amp;&amp; !preg_match(&#39;/Opera/i&#39;,$u_agent))<br />\n{<br />\n$bname = &#39;Internet Explorer&#39;;<br />\n$ub = &quot;MSIE&quot;;<br />\n}<br />\nelseif(preg_match(&#39;/Firefox/i&#39;,$u_agent))<br />\n{<br />\n$bname = &#39;Mozilla Firefox&#39;;<br />\n$ub = &quot;Firefox&quot;;<br />\n}<br />\nelseif(preg_match(&#39;/Chrome/i&#39;,$u_agent))<br />\n{<br />\n$bname = &#39;Google Chrome&#39;;<br />\n$ub = &quot;Chrome&quot;;<br />\n}<br />\nelseif(preg_match(&#39;/Safari/i&#39;,$u_agent))<br />\n{<br />\n$bname = &#39;Apple Safari&#39;;<br />\n$ub = &quot;Safari&quot;;<br />\n}<br />\nelseif(preg_match(&#39;/Opera/i&#39;,$u_agent))<br />\n{<br />\n$bname = &#39;Opera&#39;;<br />\n$ub = &quot;Opera&quot;;<br />\n}<br />\nelseif(preg_match(&#39;/Netscape/i&#39;,$u_agent))<br />\n{<br />\n$bname = &#39;Netscape&#39;;<br />\n$ub = &quot;Netscape&quot;;<br />\n}</p>\n\n<p>// finally get the correct version number<br />\n$known = array(&#39;Version&#39;, $ub, &#39;other&#39;);<br />\n$pattern = &#39;#(?&#39; . join(&#39;|&#39;, $known) .<br />\n&#39;)[/ ]+(?[0-9.|a-zA-Z.]*)#&#39;;<br />\nif (!preg_match_all($pattern, $u_agent, $matches)) {<br />\n// we have no matching number just continue<br />\n}</p>\n\n<p>// see how many we have<br />\n$i = count($matches[&#39;browser&#39;]);<br />\nif ($i != 1) {<br />\n//we will have two since we are not using &#39;other&#39; argument yet<br />\n//see if version is before or after the name<br />\nif (strripos($u_agent,&quot;Version&quot;) &lt; strripos($u_agent,$ub)){<br />\n$version= $matches[&#39;version&#39;][0];<br />\n}<br />\nelse {<br />\n$version= $matches[&#39;version&#39;][1];<br />\n}<br />\n}<br />\nelse {<br />\n$version= $matches[&#39;version&#39;][0];<br />\n}</p>\n\n<p>// check if we have a number<br />\nif ($version==null || $version==&quot;&quot;) {$version=&quot;?&quot;;}</p>\n\n<pre>\nreturn array(\n&#39;userAgent&#39; =&gt; $u_agent,\n&#39;name&#39; =&gt; $bname,\n&#39;version&#39; =&gt; $version,\n&#39;platform&#39; =&gt; $platform,\n&#39;pattern&#39; =&gt; $pattern\n);\n}</pre>\n</div>\n\n<p>It can be invoked easily by&nbsp;function GetDetails(),</p>\n\n<p>To make it simple i am assigning it inside an array i.e.,</p>\n\n<pre>\n$Fetch = function GetDetails();</pre>\n\n<p>Now I can fetch those details by</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n$Fetch[&#39;name&#39;];\n$Fetch[&#39;version&#39;];\n$Fetch[&#39;platform&#39;];\n$_SERVER[&#39;REMOTE_ADDR&#39;];</pre>\n</div>\n\n<p><strong>Note :&nbsp;</strong></p>\n\n<p>The naming&nbsp;conventions&nbsp;can be&nbsp;changed&nbsp;according to the need.</p>\n\n<p><strong>Step 2 :&nbsp;</strong></p>\n\n<p>To construct the Email that is to be fired</p>\n\n<p>Constructing the&nbsp;Body</p>\n\n<pre>\n$Sub = &quot;User : <strong>&quot;.get_current_user().&#39;</strong> accessed the Admin Panel.\nHere are the Details \n&#39;;\n$Sub .= &#39;Browser Name : &#39;.$Fetch[&#39;name&#39;].&#39;\n&#39;;\n$Sub .= &quot;Browser Version : &quot;.$Fetch[&#39;version&#39;].&#39;\n&#39;;\n$Sub .= &quot;User Operating System : &quot;.$Fetch[&#39;platform&#39;].&#39;\n&#39;;\n$Sub .= &quot;IP Address : &quot;.$_SERVER[&#39;REMOTE_ADDR&#39;].&#39;\n&#39;;</pre>\n\n<p>Constructing the Headers</p>\n\n<pre>\n$headers= &quot;From: Kohlipe Travelers \\r\\n&quot;;\n$headers.= &quot;Reply-To: The Reply To Name \\r\\n&quot;;\n$headers.= &quot;X-Mailer: PHP/&quot; . phpversion().&quot;\\r\\n&quot;;\n$headers.= &quot;MIME-Version: 1.0&quot; . &quot;\\r\\n&quot;;\n$headers.= &quot;Content-type: text/html; charset=iso-8859-1\\r\\n&quot;;</pre>\n\n<p>Then to fire we can the below static way</p>\n\n<pre>\nmail(&#39;yourmail@yourdomain.com&#39;, &#39;Subject Regarding Accesss&#39;, $Sub, $headers, &#39;sysaxiom.com&#39;);</pre>\n\n<p>or to achieve the list of subscribed admin,</p>\n\n<p><strong>Step 3 :</strong></p>\n\n<p>Establish the DB Connection</p>\n\n<pre>\n$mysqli = new mysqli(&quot;localhost&quot;, &quot;root&quot;, &quot;pass&quot;, &quot;dbname&quot;);\nif (mysqli_connect_errno()) {\necho mysqli_connect_error();\nexit();\n}</pre>\n\n<p>Now i can use the variable $mysqli for all my DB Activities,</p>\n\n<p>Following up,</p>\n\n<p>Now getting all the lists and firing using the simple foreach loop</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n$query = &quot;SELECT * FROM email_notify&quot;;\n\nif ($results = $mysqli-&gt;query($query))\n{</pre>\n\n<pre>\nwhile ($row = $results-&gt;fetch_assoc())\n{\nmail($row[&#39;email&#39;], &#39;Subject Regarding Access&#39;, $Sub, $headers, &#39;sysaxiom.com&#39;);\n}\n$results-&gt;free();\n}</pre>\n</div>\n\n<p>&nbsp;</p>\n\n<p>And now i have iterated all the lists inside the foreach loop which will fire itself the mail who are listed in the email_notify table.</p>\n\n<p>The same above function can be used for the Illegal Access, in addition the subject and important priority can be changed accordingly.</p>\n\n<p>And it was done&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 1, '2015-07-01 20:44:06', 1, '2015-10-01 07:30:45', '2015-10-06 16:58:11'),
(16, 'How non-recommendation helped me ;) ', 'How-non-recommendation-helped-me-;)', '<p>Previous day i had a which deals with some no sense.</p>\n\n<p>I was working on a admin panel which is fully made of Bootstrap and rich set of its native date, time picker and its own entities. At the same time for the front / user end panel I was given a&nbsp;paid template from theme forest and it had a loads of features with proper documentation in it.</p>\n\n<p>The guy i was working with wanted to have one of the element (Time Picker) like the below given screen</p>\n\n<p><img alt="" class="img-thumbnail" src="../images/blog/traveler-template-timer.png" style="height:210px; width:330px" /></p>\n\n<p>The only difficulty to have this in admin panel is because of the several conflicts araised from the admin panel, I really don&rsquo;t have enough time to fix these conflicts (and i am already having multiple jquery functions inside my page). The situation i want to have the feature without disturbing my working within a certain period of time (say 30 min). So i planned to use the (poor) iframe to have that feature.</p>\n\n<p>What i did is i filtered all the css, js files required for the targeted time picker and made a minified version which results in 17 kb ~ . This was not a big deal to load inside a frame,</p>\n\n<p>As a default property of iframe&nbsp;<strong>scrolling=&rdquo;no&rdquo; frameborder=&rdquo;0&Prime;&nbsp;</strong>&nbsp;and then i wanted to get the frame&rsquo;s value while submitting as i don&rsquo;t want to complex to set the value via ajax call on change of the frame&rsquo;s element.</p>\n\n<p>Then what i did was, i planned to get the value of the frame&rsquo;s element while submitting by identifying the frame&rsquo;s name and element&rsquo;s name.</p>\n\n<p>It is achieved by</p>\n\n<pre>\nvar target = $(&#39;iframe[name=select_frame]&#39;).contents().find(&#39;#select_name&#39;).val();</pre>\n\n<p>In the above code,&nbsp;<strong>select_frame&nbsp;</strong>&nbsp;is the frame&rsquo;s name and&nbsp;<strong>select_name&nbsp;</strong>&nbsp;is the element&rsquo;s name inside the frame and it was assigned to the variable&nbsp;<strong>target&nbsp;</strong>&nbsp;inside my frame.</p>\n\n<p>Then i wanted to send all those values to another page by jquery ajax call, if i get each element&rsquo;s value by id it would not at all a deal, as i already to form serialize i wanted to add this element towards the value of the form to the target page.</p>\n\n<p>So, Here is the simple workaround</p>\n\n<pre>\ndata : $(&quot;#allocateboat&quot;).serialize()+&#39;&amp;element=&#39;+target,</pre>\n\n<p>What i did is just added the element along the form serialized value and it was done&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>\n', 1, '2015-07-03 21:34:06', 1, '2015-10-01 07:32:16', '2015-10-01 09:53:46'),
(17, 'Encourage one to make it Better ! ', 'Encourage-one-to-make-it-Better-!', '<p>Encourage one to Make it Better !!</p>\n\n<p>This is really a true one and it is experienced by me today.</p>\n\n<p>These days, i am getting encouraged through several comments in&nbsp;<a href="http://stackoverflow.com/" target="_blank">Stackoverflow</a>&nbsp;(Though a very less), but i do respect for every comment that belongs me (and for the one i deserve for).</p>\n\n<p>&nbsp;</p>\n\n<p>Already i was get sparked by few of the comments, encouragements and good peoples. (I shall list those peoples in another post).</p>\n\n<p><strong>2 Best Incidents</strong>&nbsp;that sparked me a lot today,</p>\n\n<p>I got inspired to the simple and awesome combination of the JQuery + Php, that resulted in trying &nbsp;some workouts myself in hand written codes.</p>\n\n<p><strong>1st Incident</strong></p>\n\n<p>While posting answer for&nbsp;<a href="http://stackoverflow.com/q/30886356/3282633" target="_blank">this Question</a>&nbsp;i find little hard for Simple PDO Operation which binds with a parameter. Though i find many codes around i don&rsquo;t find satisfied with those lines.</p>\n\n<p>So, I plan to have something which would save time and they are smart enough.</p>\n\n<p>Which resulted in Creating a Repo named as&nbsp;<a href="https://github.com/sulthanallaudeen/Micro-Life-Saver" target="_blank">Micro Life Saver</a>. Here i plan to have some power code that does everything. Here i shall add some more Life Saver in future</p>\n\n<p><strong>Note :</strong>&nbsp;I already have a kid named as&nbsp;<a href="https://github.com/sulthanallaudeen/PHP-MySQL-i-All-in-One" target="_blank">PHP-MySQL(i) All in One</a></p>\n\n<p><strong>2nd Incident</strong></p>\n\n<p>Today one of my colleague dev asked a doubt which is related to a simple ajax call (which i love a lot these days), for that i wanted to see Mr.G and Mr.SO to fetch some segments (which i really not want to do for such a thing). Once i proposed the logic i can able to see the awesomeness with the dev. But if i have that in a hand-made it would have some additional awesomeness to myself.</p>\n\n<p>So, I plan to have some post which i would really do it hand-made with explanation for basics which would surely make more expertise.</p>\n\n<p>[Ahm, I can find english dies a little here, however i will save it too&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" />&nbsp;]</p>\n\n<p><em>Cheer&rsquo;s for the time ahead !!</em></p>\n', 1, '2015-07-07 00:44:56', 1, '2015-10-01 07:32:44', '2015-10-17 04:09:36'),
(18, 'How Cute the Jquery is ! With Basic Operation which is lovable – Short Version ', 'How-Cute-the-Jquery-is-!-With-Basic-Operation-which-is-lovable-–-Short-Version', '<p>Hello, Guys.</p>\n\n<p>We all know the importance of&nbsp;<strong>JQuery</strong>&nbsp;(though Angular rocks). I can say that JQuery is the step one should learn to have his things done.</p>\n\n<p>Trust me, its simple like air / i can assure that you will love the way i explain you(might be little childish).</p>\n\n<p>The simple step i would say is like this</p>\n\n<p><strong>1. Include the Library</strong></p>\n\n<pre>\n&lt;script src=&quot;sysaxiom.com/api/jquery.min.js&gt;&lt;/script&gt;</pre>\n\n<p><strong>2. Define the Input</strong></p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;div id=&#39;&#39;MyTrigger&quot;&gt;&lt;/div&gt;</div>\n\n<p>&nbsp;</p>\n\n<p><strong>3. Detect the Input Action &ndash; Trigger</strong></p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<pre>\n&lt;script&gt;\n$(&quot;#MyTrigger&quot;).click(function(){  //Here we can assure that that id with MyTrigger is clicked  })\n&lt;/script&gt;?\n</pre>\n</div>\n\n<p><strong>4. Do some operation for Input&nbsp;</strong></p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">console.log(&quot;Boss !!! We got the Input&quot;);</div>\n\n<p><strong>5. Define the Output</strong></p>\n\n<pre>\n&lt;div id=&quot;MyResult&quot;&gt;&lt;/div&gt;</pre>\n\n<p><strong>6. Show your Output&nbsp;</strong></p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">$(&quot;#MyResult&quot;).html(&quot;MyTrigger is Clicked&quot;);</div>\n\n<p><strong>Fiddle Created for This Demo</strong></p>\n\n<p><strong>1.&nbsp;Console Output &ndash;</strong></p>\n\n<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/jqq1kdon/embedded/" width="100%"></iframe></p>\n\n<p>&nbsp;</p>\n\n<p><strong>2. HTML Output &ndash;</strong></p>\n\n<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/4712v36u/embedded/" width="100%"></iframe></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 1, '2015-07-09 00:44:12', 1, '2015-10-01 08:09:35', '2015-10-01 08:09:35'),
(19, 'How Cute the Jquery is ! With Basic Operation which is lovable – Story Version ', 'How-Cute-the-Jquery-is-!-With-Basic-Operation-which-is-lovable-–-Story-Version', '<p>Hello, Guys.</p>\n\n<p>We all know the importance of&nbsp;<strong>JQuery</strong>&nbsp;(though Angular rocks). I can say that JQuery is the step one should learn to have his things done.</p>\n\n<p>Trust me, its simple like air / i can assure that you will love the way i explain you(might be little childish).</p>\n\n<p>The simple step i would say is like this</p>\n\n<p><strong>1. Include the Library</strong></p>\n\n<p><strong>2. Define the Input</strong></p>\n\n<p><strong>3. Detect the Input Action &ndash; Trigger</strong></p>\n\n<p><strong>4. Do some operation for Input&nbsp;</strong></p>\n\n<p><strong>5. Define the Output</strong></p>\n\n<p><strong>6. Show your Output&nbsp;</strong></p>\n\n<p>All the steps can be a single line or more</p>\n\n<p>Let&rsquo;s Begin</p>\n\n<p><strong>Step 1 :&nbsp;</strong></p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Include the Library</strong></p>\n\n<p>Why include ?</p>\n\n<p>Because you don&rsquo;t want to write the basic function.</p>\n\n<p>Do you want to do write your own ?</p>\n\n<p>Then</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<p>&lt;script&gt;</p>\n\n<p>Write all your Basic-Mid-Hard functions here</p>\n\n<p>&lt;/script&gt;</p>\n</div>\n\n<p>Else, Your want to be&nbsp;<strong>Smart enough ?</strong></p>\n\n<p>Then just include the Library in a single line</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;script scr=&quot;library.js&quot;&gt;&lt;/script&gt;</div>\n\n<p>The&nbsp;<em>library.js</em>&nbsp;is the file which is written by some good folks, It would have some hundreds of functions</p>\n\n<p>You can include it directly by globally available CDN or download it from there&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>\n\n<p>I too provide something&nbsp;<a href="http://www.sysaxiom.com/api/jquery.min.js" target="_blank">http://www.sysaxiom.com/api/jquery.min.js</a></p>\n\n<p>So, Inclusion of the library could be in a single line as i said</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;script src=&quot;sysaxiom.com/api/jquery.min.js&gt;&lt;/script&gt;</div>\n\n<p><strong>Step&nbsp;2 :</strong></p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Define the Input</strong></p>\n\n<p>You can define the input / refer the input by some&nbsp;<strong>id</strong>&nbsp;or&nbsp;<strong>class</strong></p>\n\n<p>Define by id could be Something like</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<p>&lt;input type=&quot;text&quot; id=&quot;MyInput&quot;&gt;</p>\n\n<p>or</p>\n\n<p>&lt;div id=&quot;MyInput&quot;&gt;</p>\n\n<p>or</p>\n\n<p>Option Select or Radio Button or Checkbox or Submit or anything you wish</p>\n</div>\n\n<p>Define by class could be Something like</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<p>&lt;input type=&quot;text&quot; class=&quot;MyInput&quot;&gt;</p>\n\n<p>or</p>\n\n<p>&lt;div class=&quot;MyInput&quot;&gt;</p>\n\n<p>or</p>\n\n<p>Option Select or Radio Button or Checkbox or Submit or anything you wish</p>\n</div>\n\n<p>So, coming to the point. Defining the input it would be</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;div id=&#39;&#39;MyTrigger&quot;&gt;&lt;/div&gt;</div>\n\n<p><strong>Step 3 :</strong></p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Detect the Input Action &ndash; Trigger</strong></p>\n\n<p>You can detect the Input Action, Really many actions are there</p>\n\n<p>Like&nbsp;<strong>Click, Change, Hover, MouseIn, MouseOut</strong>&nbsp;and loads</p>\n\n<p>Let&rsquo;s detect the input with the click action</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<p>&lt;script&gt;</p>\n\n<p>$(&quot;#MyTrigger&quot;).click(function(){ &nbsp;//Here we can assure that that id with MyTrigger is clicked &nbsp;})</p>\n\n<p>&lt;/script&gt;</p>\n</div>\n\n<p><strong>Step 4 :</strong></p>\n\n<p><strong>&nbsp; &nbsp; Do some operation for Input&nbsp;</strong></p>\n\n<p>What Operation shall we do at this time ???</p>\n\n<p>Anything that you like</p>\n\n<p>Basic &ndash;&nbsp;<em>Do some 1+1 or simply smile</em></p>\n\n<p>Mid &ndash;&nbsp;<em>Do some ajax call</em></p>\n\n<p>Exp &ndash;&nbsp;<em>I really don&rsquo;t know, it can be anything that you wish</em></p>\n\n<p>Ahm, Let&rsquo;s say what happened i.e., Input is received</p>\n\n<p>It can be said by</p>\n\n<p><strong>Developer&rsquo;s Way</strong>&nbsp;&ndash; Console or&nbsp;<strong>People&rsquo;s Way</strong>&nbsp;&ndash; Towards the html page</p>\n\n<p>Note : If we follow the first one, we don&rsquo;t wan&rsquo;t to define the output or show output as we are outputting the information in the place which is already defined.</p>\n\n<p>It is not a big deal, just a single line as i said.</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">console.log(&quot;Boss !!! We got the Input&quot;);</div>\n\n<p><strong>5. Define the Output</strong></p>\n\n<p>If you are at this step then it is sure that you want to know/follow the People&rsquo;s way</p>\n\n<p>Here&rsquo;s how we Define the Output Section</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&lt;div id=&quot;MyResult&quot;&gt;&lt;/div&gt;</div>\n\n<p><strong>6. Show your Output&nbsp;</strong></p>\n\n<p>And Showing the output toward html is as simple like this</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">$(&quot;#MyResult&quot;).html(&quot;MyTrigger is Clicked&quot;);</div>\n\n<p><strong>Fiddle Created for This Demo</strong></p>\n\n<p><strong>1.&nbsp;Console Output &ndash;</strong></p>\n\n<p>&nbsp;</p>\n\n<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/jqq1kdon/embedded/" width="100%"></iframe></p>\n\n<p><strong>2. HTML Output &ndash;</strong></p>\n\n<p><iframe class="iframe-class" frameborder="0" height="500" scrolling="yes" src="http://jsfiddle.net/allaudeen/4712v36u/embedded/" width="100%"></iframe></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 1, '2015-07-11 02:34:33', 1, '2015-10-01 08:18:57', '2015-10-01 08:18:57'),
(20, 'How to install Laravel Older Versions through Composer ', 'How-to-install-Laravel-Older-Versions-through-Composer', '<p>How to install Laravel Older Versions through Composer</p>\n\n<p>Today, While I want to do some reseach with Laravel 5.0, I can&rsquo;t able to download it in the default way</p>\n\n<p>i.e.,</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">composer create-project laravel/laravel</div>\n\n<p>It will install the latest stable version.</p>\n\n<p>Then I found that, If someone want to install a specific version (say 4.2), then</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">composer create-project laravel/laravel YourAwesomeFolder 4.2</div>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 1, '2015-08-03 00:44:26', 1, '2015-10-01 08:20:41', '2015-10-01 08:20:41'),
(21, 'Tricky File Upload, List and Delete ', 'Tricky-File-Upload,-List-and-Delete', '<p>I got a &nbsp;mate named as&nbsp;<a href="http://stackoverflow.com/users/4842333/luigi" target="_blank">Luigi</a>&nbsp;who asked a question about uploading the files using php. I can understand that there few mistakes in his code and i helped him to complete it which extends to listing the files inside the sub directory,</p>\n\n<p>&nbsp;</p>\n\n<p>And today he needs to delete those files &nbsp;which looks a good snacks for me. So i gave him a little brief answer which i don&rsquo;t want to repeat it again here.</p>\n\n<p>Here&rsquo;s the&nbsp;<a href="http://stackoverflow.com/q/31232594/3282633" target="_blank">Question</a>&nbsp;and&nbsp;<a href="http://stackoverflow.com/a/31234250/3282633">Answer</a></p>\n\n<p>Here&rsquo;s the&nbsp;<a href="https://eval.in/393049" target="_blank">Eval of the Code</a>&nbsp;Here&rsquo;s the updated&nbsp;<a href="http://jsfiddle.net/allaudeen/rrpbuov2/" target="_blank">Fiddle</a>&nbsp;(Updated on 14th July 2015)</p>\n', 1, '2015-08-07 01:34:28', 1, '2015-10-01 08:21:32', '2015-10-17 04:10:04'),
(22, 'Strange behaviour of Laravel Sessions and How I overcome it. ', 'Strange-behaviour-of-Laravel-Sessions-and-How-I-overcome-it.', '<p>I recently met a strange behaviour from laravel where i am getting logged out in certain minutes, though i have set the expiration of the session<br />\nfor a very long time.</p>\n\n<p>Few of my office mates (Mr.Manoj) and other suffered the same issue recently.</p>\n\n<p>To handle it, I tried to follow the bad practise of setting the user id in&nbsp;<a href="http://jsfiddle.net/allaudeen/g7hxxp2g/" target="_blank">local storage</a>&nbsp;and getting it each time.</p>\n\n<p>Then i planned to overcome in some legal hacks,</p>\n\n<p>After few close analysis of browser i noted that laravel is creating a session named as &lsquo;laravel_session&rsquo; in evrey login and destroying<br />\nit the same in logout.</p>\n\n<p>I just made the simple hack</p>\n\n<p><strong>Step 1 :</strong></p>\n\n<p>Open the session handler file.</p>\n\n<p>It should be under config-&gt;session.php</p>\n\n<p><strong>Step 2 :</strong></p>\n\n<p>Renamed the name &lsquo;laravel_session&rsquo; to my project name</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">&#39;cookie&#39; =&gt; &#39;bizarrechat_laravel_session&#39;,</div>\n\n<p>And the Problem was solved !!</p>\n\n<p>So, It will create the session with suffix to project name.</p>\n\n<p><strong>Note :</strong>&nbsp;You can dig the source file to explore a bit more</p>\n', 1, '2015-08-23 03:26:17', 1, '2015-10-01 08:22:25', '2015-10-17 04:10:13'),
(23, 'My First Cross Origin Script ', 'My-First-Cross-Origin-Script', '<p>Today i found a cool personal website and i was really wondered with the design, While seeing the other pages, i found that the admin used ajax calls for the testimonial kind of section, after digging the console i found that it was unsecured ajax call.</p>\n\n<p>&nbsp;</p>\n\n<p>I tried to post the data from form and it worked, then i posted via to&nbsp;<a href="https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?hl=en" target="_blank">postman client</a>&nbsp;and post suceeded.</p>\n\n<p>Then i collected the address, and form attributes and methods and planed to attempt the call with yet another simple call of my own.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Amazing it worked</strong>, then i planned to have post with iteration, I planned with 10 and then tried with some big numbers,</p>\n\n<p>&nbsp;</p>\n\n<p>I got all the responses posted and then the target user got&nbsp;<strong>Internal Server Error&nbsp;</strong>&nbsp;in another few minutes, then throw error -&gt; exceeded maximum connections.</p>\n\n<p>&nbsp;</p>\n\n<p>Here&rsquo;s the code that i tried with</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<p>&nbsp;</p>\n</div>\n\n<p><strong>Moral :&nbsp;</strong></p>\n\n<p><em><strong>Never believe anonymous users !</strong></em></p>\n', 1, '2015-08-28 21:46:17', 1, '2015-10-01 08:23:14', '2015-10-17 04:10:21'),
(24, 'Recommendation of Crayon Syntax Highlighter ', 'Recommendation-of-Crayon-Syntax-Highlighter', '<p>So far for all the codes that were embedded i have used&nbsp;<a href="https://wordpress.org/plugins/syntaxhighlighter/" target="_blank">SyntaxHighlighter</a>&nbsp;where i found so many difficulties and after using the&nbsp;<a href="https://github.com/aramk/crayon-syntax-highlighter" target="_blank">Crayon Syntax Highlighter</a>&nbsp;i really feel good and it makes many things easier. I recommend this plugin to use if you deal with the combination wordpress + code</p>\n', 1, '2015-09-01 00:01:41', 1, '2015-10-01 08:24:17', '2015-10-17 04:10:28'),
(25, 'Is goto in PHP Evil ', 'Is-goto-in-PHP-Evil', '<p>I really know that i am mad lover of goto, but i really wonder why many of the people hate it (Even many of my office mates).</p>\n\n<p>&nbsp;</p>\n\n<p>But i always use to tell them that it is like a knife and it depends on how we use it. It&rsquo;s upto you to cut the finger of cut the fruit.</p>\n\n<p>Today i found a&nbsp;<a href="http://stackoverflow.com/q/1900017/3282633" target="_blank">post in Stackoverflow</a>&nbsp;which took my time a little bit.</p>\n\n<p>I read all the answer and comments where this comment made me to read it thrice.</p>\n\n<p><img alt="" src="http://i.imgur.com/lc48ATo.png" style="height:400px; width:711px" /></p>\n\n<p>Here&rsquo;s the Featured Cartoon from php.net</p>\n\n<p>&nbsp;</p>\n\n<p><img alt="" src="http://i.imgur.com/15SuOW9.png" style="height:201px; width:740px" /></p>\n\n<p>&nbsp;</p>\n\n<p>BUT I DO ALWAYS LOVE&nbsp;<strong><a href="http://php.net/manual/en/control-structures.goto.php" target="_blank">GOTO</a></strong></p>\n', 1, '2015-09-02 23:26:41', 1, '2015-10-01 08:24:47', '2015-10-17 04:10:35'),
(26, 'Plan for Task Scheduler ', 'Plan-for-Task-Scheduler', '<p>After few Projects and little House-Keeping works i have a plan to develop a Task Scheduler in Laravel 5 and AngularJS. Let me fork and convey the other details in following posts !</p>\n\n<p>&nbsp;</p>\n\n<p>Cheers&nbsp;<img alt="????" src="http://s.w.org/images/core/emoji/72x72/1f609.png" /></p>\n', 1, '2015-09-09 21:26:12', 1, '2015-10-01 08:25:10', '2015-10-06 17:05:07');
INSERT INTO `blog` (`id`, `blogTitle`, `blogUrl`, `blogContent`, `blogAuthor`, `blogDate`, `blogStatus`, `created_at`, `updated_at`) VALUES
(27, 'How to create App in Heroku in 4 Steps ', 'How-to-create-App-in-Heroku-in-4-Steps', '<p>I was wondering and trying to make use of Heroku since my days in Vel Tech where i attempted to build some<br />\nfacebook application. However i can&rsquo;t able to make it work more than sign-up :P. After seeing some good friends<br />\nmaking use of it I then plan to Utilize it and succeded.</p>\n\n<p>Here i will say How to make use of it in simple steps</p>\n\n<p><strong>Step 1 :</strong>&nbsp;<a href="https://github.com/new" target="_blank">Create a Github Repo</a>&nbsp;and then Open&nbsp;<a href="https://www.heroku.com/" target="_blank">Heroku</a>&nbsp;, then make a Register and Login to your Account, and try reading&nbsp;<a href="https://devcenter.heroku.com/articles/getting-started-with-php" target="_blank">this</a></p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Create-Github-Repo.png"><img alt="Create-Github-Repo" class="img-thumbnail" src="../images/blog/Create-Github-Repo.png" style="height:169px; width:300px" /></a></p>\n\n<p><strong>Step 2 :</strong>&nbsp;Click on the &lsquo;+&rsquo; Icon in the Top Left of Dashboard, then Name your App and choose the Location</p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Create-Project.png"><img alt="Create-Project" class="img-thumbnail" src="../images/blog/Create-Project.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Create-Heroku-App.png"><img alt="Create-Heroku-App" class="img-thumbnail" src="../images/blog/Create-Heroku-App.png" style="height:169px; width:300px" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Step 3 :</strong>&nbsp;Connect with Heroku-Belt or Github or Dropbox, I will prefer Github here. Just search for your repo and click on the connect button. (Create a valid composer.json in your Repo)</p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Connect-Github.png"><img alt="Connect-Github" class="img-thumbnail" src="../images/blog/Connect-Github.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Connect-Repo.png"><img alt="Connect-Repo" class="img-thumbnail" src="../images/blog/Connect-Repo.png" style="height:169px; width:300px" /></a></p>\n\n<p><strong>Step 4 :</strong>&nbsp;Enable automatic deploys by clicking on the button &lsquo;Enable automatic deploys&rsquo; and Deploy the Master Branch (or any Branch you prefer)</p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Enable-Auto-Deploy.png"><img alt="Enable-Auto-Deploy" class="img-thumbnail" src="../images/blog/Enable-Auto-Deploy.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Deploy-Master-Branch.png"><img alt="Deploy-Master-Branch" class="img-thumbnail" src="../images/blog/Deploy-Master-Branch.png" style="height:169px; width:300px" /></a><a href="http://sysaxiom.com/wp-content/uploads/2015/08/Deployed.png"><img alt="Deployed" class="img-thumbnail" src="../images/blog/Deployed.png" style="height:169px; width:300px" /></a></p>\n\n<p><strong>Now, Your App is Live, Just click on the view button and the url redirected is your&nbsp;<a href="http://sys-heroku-tutorial.herokuapp.com/" target="_blank">App&rsquo;s URL.</a></strong></p>\n', 1, '2015-09-19 21:56:41', 1, '2015-10-01 09:01:33', '2015-10-08 16:14:02'),
(28, 'Javascript is good boy too ! ', 'Javascript-is-good-boy-too-!', '<p>While developing the TaskManagerApp i am planning it with simple and efficient actions,</p>\n\n<p>I had many wide options for the user to make themself comfort such as choosing the database mode, connection type etc.,</p>\n\n<p>While constructing such things, as i am developing the front end in AngularJs i faced many sweet issues and then gently crossed it with stackoverflow.</p>\n\n<p>And this made me to stuck for a while, i don’t know the reason why Logout menu is not expanding while the original template does.</p>\n\n<p>After few investigation i found the class changes happening over it.. then i made myself to build that functionality.</p>\n\n<p>Its as simple like having and removing the class on click event.</p>\n\n<p>Here’s the way i deal with</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">function menuSelector() {<br />\nif (document.getElementById("tobechanged").className == "dropdown pull-right" ) {<br />\ndocument.getElementById("tobechanged").className = "dropdown pull-right open";<br />\n}<br />\nelse<br />\n{<br />\ndocument.getElementById("tobechanged").className = "dropdown pull-right";<br />\n}<br />\n}</div>\n\n<p><strong>Query summary :</strong></p>\n\n<p>While clicking the Menu , the function menuSelector() will be called, it will check if the id named as ‘tobechanged’ has the class name<br />\n‘dropdown pull-right’ (It means the menu is not expanded). if the class name is like than it will be renamed to ‘dropdown pull-right open’<br />\nwhich will make the menu expand..If not it will be again set to ‘dropdown pull-right’</p>\n\n<p>Any Questions ?</p>\n\n<p>I am not sure even if someone is reading it. I am expecting a little question from someone as i made it like that.</p>\n\n<p>Cheers</p>\n\n<p> </p>\n\n<p> </p>\n', 1, '2015-09-23 11:26:41', 1, '2015-10-01 09:01:33', '2015-10-06 17:04:09'),
(29, 'Goolge’s New Logo ', 'Goolge’s-New-Logo', '<p>Yes, Google&rsquo;s logo updated&nbsp;<a href="http://googleblog.blogspot.in/2015/09/google-update.html" target="_blank">on the fly</a>, i wonder to see&nbsp;<a href="https://en.wikipedia.org/wiki/Sundar_Pichai" target="_blank">Mr.Sundar Pichai</a>&lsquo;s comment at first also you can see&nbsp;<a href="https://plus.google.com/+SuLtHaNAlLaUdeEn/posts/M6FHyGXmsCF" target="_blank">mine there.</a></p>\n\n<p>Here&rsquo;s the animated logo</p>\n\n<p><a href="http://sysaxiom.com/wp-content/uploads/2015/09/OGB-INSIDER-BLOGS-GoogleLogox2-Animated.gif"><img alt="OGB-INSIDER-BLOGS-GoogleLogox2-Animated" class="img-thumbnail" src="../images/blog/Google-Logo-Animated.gif" style="height:169px; width:300px" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>Cheer&rsquo;s !</p>\n', 1, '2015-09-28 17:46:41', 1, '2015-10-01 09:04:15', '2015-10-08 16:10:23'),
(30, ' Google App Script -> Which makes you feel Great !! ', '-Google-App-Script-->-Which-makes-you-feel-Great-!!', '<p>Hello !!</p>\n\n<p>I worked on Google App Script last week ,and I really felt awesome on the work i had.</p>\n\n<p>And I wanted to share the experience and goodfullness on it.</p>\n\n<p>I will be sharing the Scripts as a part where i will proivde the basic information about writing the GoogleScript here</p>\n\n<p>Here are the initiative links to you need to turn on</p>\n\n<p>http://www.google.com/script/start/</p>\n\n<p>https://developers.google.com/apps-script/?hl=en</p>\n\n<p><strong>Basic Note :</strong></p>\n\n<p><strong>1. To Initiae the Script, just navigate to</strong></p>\n\n<p>https://script.google.com</p>\n\n<p>File -&gt; New -&gt; Script</p>\n\n<p>Name the Script name (prefer to end with .gs as extension)</p>\n\n<p><strong>2. To Log in the Console</strong></p>\n\n<p>Logger.log(&lsquo;Your Data&rsquo;);</p>\n\n<p><strong>3. To Run the Script</strong></p>\n\n<p>Press the Run Button in the Action Bar</p>\n\n<p><strong>4. To view the Log</strong></p>\n\n<p>View -&gt; Logs</p>\n\n<p>There are many useful resources available in Internet regarding the Google Script in websites such as www.labnol.org</p>\n\n<p>Let me continue in the following scripts in the following Posts &lt;3</p>\n', 1, '2015-10-01 07:46:41', 1, '2015-10-01 09:04:42', '2015-10-08 16:08:59'),
(31, 'Think before you Build ', 'Think-before-you-Build', '<p>Few days i have to build a App name as Match Predicor. I wanted to use AngularJS, CSS with any Framework.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>I Choosed Laravel as the Framework, MySQL as the backend and proceeded to Build.&nbsp;</p>\n\n<p>The app was almost ready and i wanted to release the app on the next day, The app was developed fully from my Local Machine where i have the latest xampp package (which should have the latest php and related packs).</p>\n\n<p>&nbsp;</p>\n\n<p>I really got surprise on the behavious of the application once i moved to online server. Nothing worked. i.e., i got error in the public/index.php Page always., I took sometime to have a try to fix on it. It was a fail in all the cases, i tried to think all the possiblities and nothing made the app works, but the App works very good in local machine..&nbsp;</p>\n\n<p>Then i realized that the latest Laravel version which i use wants the latest php version i.e., 5.6 but the server i usually host the current webstie have only php 5.4 that makes the clashes.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>I can&#39;t able to downgrade easily the framework, then what i did is,&nbsp;</p>\n\n<p><strong>1. Installed a New Laravel Framework in my machine,&nbsp;</strong></p>\n\n<p><strong>2. Copied the Controllers, Models and Views</strong></p>\n\n<p>&nbsp; &nbsp; &nbsp;While moving this to online, i removed few of the classes and methods inside the models which is not supported by the Laravel 5.0. This made me to have the app in two versions Laravel 5.1 and 5.0</p>\n', 1, '2015-10-19 10:00:00', 1, '2015-11-01 18:20:20', '2015-11-06 09:04:32'),
(32, 'Increase your confidence. Defeat your past. Don''t set limit ', 'Increase-your-confidence.-Defeat-your-past.-Don''t-set-limit', '<p>You know what. I am really lucky to be myself.&nbsp;</p>\n\n<p>I love the changes, behaviour, attitude and everything from me. I can see the goodness and the willingness to learn.&nbsp;</p>\n\n<p>To be honest, i do love my computer very much than any other things, which automatically attracts me to learn much things better.&nbsp;</p>\n\n<p><strong>Never limit yourself</strong></p>\n\n<p><strong>&nbsp;&nbsp;&nbsp;</strong>Never rest your mind by the way of earning more money with less work. Even if you got low or high salary, if you have the will to learn you will&nbsp;do it.&nbsp;</p>\n\n<p>&nbsp; &nbsp;It doesn&#39;t matter how much experience you got in terms of years, but it matters what you did&nbsp;in those period.&nbsp;</p>\n\n<p>&nbsp; &nbsp;Always do innovative things, create awesomeness, explore the best, achieve the best and make yourself better. If you do so, you don&#39;t need to sell yourself, you will be identified by the right person who really needs you.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Cheers !!</strong></p>\n', 1, '2015-10-23 10:00:00', 1, '2015-11-01 18:20:59', '2015-11-06 09:04:55'),
(33, 'Cordova :: The Platform which makes web dev to dive into mobile ', 'Cordova-::-The-Platform-which-makes-web-dev-to-dive-into-mobile', '<p>Firstly, I thank Mr.Suresh who always gives me the opportunity to learn, I always prefer to learn new things and do innovate works whereever i go.&nbsp;</p>\n\n<p>And i saw him as the person who wanted to do the same, I shall write a seperate post to thank him as i wanted to do.</p>\n\n<p>Ok, The cordova, Even those it is a hybrid way to develop mobile apps, it makes a convinient way for web dev to build mobild app on the go.&nbsp;</p>\n\n<p>The things to do is to choose an awesome template which looks like a mobile app with less weight and start writing the apis and then make the build that&#39;s it.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>I mostly choose NG to speed up the web and grab some good tempalates available over the web and make things done.&nbsp;</p>\n\n<p>And i was on the plan to build my own app to manage my Website and me (hehe, just to avoid any missout and for some plans)&nbsp;</p>\n\n<p>Also, i recommend using&nbsp;ngcordova to grab the functions which deals with triggering the fireful mobile functions. Yes you can, but make sure it doesn&#39;t looks like a website, no huge power consumption and takes less time for all actions. And that&#39;s the way.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Like always, i never want you to stop with cordova, lets dive into native app development once the cordova is done.&nbsp;</p>\n\n<p>Good Luck !</p>\n', 1, '2015-11-01 10:00:00', 1, '2015-11-01 18:21:24', '2015-11-06 09:05:19'),
(34, 'First Windows App Development', 'First-Windows-App-Developmen', '<p>Yeah, This was the day i created First Windows App, though it was a hybrid one, i faced lots of challenges to reach it, Here i am giving it in short</p>\n\n<p>&nbsp;</p>\n\n<p>1. First you need a Windows 8.1 Operating System, (If not achieve it thought VMWare)</p>\n\n<p>2. Visual Studio 2013 Express</p>\n\n<p>3. Cordova -- Nodejs, Cordova package</p>\n\n<p>4. Windows Phone 8.0 or 8.1&nbsp;</p>\n\n<p>Once all set, you need to developer unlock the VS and the Windows Phone&#39;s Live Account,</p>\n\n<p>Then you shall proceed the regualr way to make the hybrid one.&nbsp;</p>\n\n<p>You may face sdk issues while building and you want to fix it, The way how i did like <a href="https://github.com/phonegap/phonegap-plugin-push/issues/297">here </a>and <a href="https://github.com/phonegap/phonegap-plugin-push/issues/271">here</a></p>\n\n<p>Cheers and Good Luck !</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 1, '2015-11-13 00:00:00', 1, '2015-11-04 16:30:50', '2015-11-04 16:31:31'),
(35, 'Laravel Middleware - Short Intro', 'Laravel-Middleware---Short-Intr', '<p>This is the post about Laravel&#39;s Middleware</p>\n\n<p>Middleware is one of the cool way that is included in Laravel 5, It focuses mainly on dealing with the request that reaches application. The Laravel 5 users are highly adviced to use this feature to make use of it.&nbsp;</p>\n\n<p>Middlware can be enabled or disabled (included or excluded) from Kernal.php file inside the `Http` Folder.</p>\n\n<p>This is the proper &nbsp;prodefinition given by Laravel about Middleware</p>\n\n<p><span style="color:#008000">HTTP middleware provide a convenient mechanism for filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.</span></p>\n\n<p>We can create our own middleware using artisan command&nbsp;</p>\n\n<p><code>make:middleware</code></p>\n\n<pre>\n<code>php artisan make:middleware OldMiddleware</code></pre>\n\n<p>And we can also do actions before reaching and after reaching Middleware. Read the <a href="http://laravel.com/docs/5.1/middleware">docs</a>&nbsp;to know more about Middlware</p>\n\n<p>&nbsp;</p>\n', 1, '2015-11-15 00:00:00', 1, '2015-11-06 07:33:17', '2015-11-06 07:33:53'),
(36, 'Time to Shift yeah i got job in Chennai Again ', 'Time-to-Shift-yeah-i-got-job-in-Chennai-Again', '<p>Yeah, i am stepping into my 3rd Year in Work.&nbsp;</p>\n\n<p>Absolutely it means i have completed 2 year of working experience (Mostly php :p)</p>\n\n<p>Now, i got an offer from Chennai, I planned a lot in this period but i wanted to, and i expect the place i join to co-ordinate.</p>\n\n<p>Yes, it should.. To server the company and grow along with it, is the motto in my resume ;)</p>\n\n<p>Well, only 1 more day to go from Old Company and i shall proceed with the shifting process, Nov 16th is the joining date in New Company, I shall tell a lot about New Company soon !!</p>\n', 1, '2015-11-18 00:00:00', 1, '2015-11-13 21:43:04', '2015-11-13 21:45:18'),
(37, 'Chosen Select and Input old Laravel', 'Chosen-Select-and-Input-old-Larave', '<p>Writing this Post after long time, which would help others if they use Chosen Menu</p>\n\n<p>&nbsp;</p>\n\n<p>Here is the Link of <a href="https://harvesthq.github.io/chosen/">Chosen Menu</a>&nbsp;. Infact i use it for many of my projects, which is simple and free to use.</p>\n\n<p>&nbsp;</p>\n\n<p>AFAIK You can customize this as per your need, today morning while i do some bed time programming i wanted to restore the selected items after validation, it was a form post action, What i did is simple..</p>\n\n<p>&nbsp;</p>\n\n<p>1. Check if the old inputs were there</p>\n\n<p>2. If so, then get the old inputs and iterate along to check the presence <a href="http://php.net/manual/en/function.in-array.php">in_array</a></p>\n\n<p>&nbsp;</p>\n\n<p>Here you go</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">@foreach($types as $type)<br />\n&lt;option value=&quot;{{ $type-&gt;id }}&quot; &nbsp;&lt;?php&nbsp;if(Input::old(&#39;type&#39;))&nbsp;{&nbsp;if(in_array($type-&gt;id, Input::old(&#39;type&#39;))) { echo &#39;selected=&quot;selected&quot;&#39;; }&nbsp;}?&gt;&nbsp;&gt;&nbsp;{{ $type-&gt;name }} &lt;/option&gt;<br />\n@endforeach</div>\n\n<p>&nbsp;</p>\n\n<p>You shall break it down to look deeper :)&nbsp;</p>\n', 1, '2016-02-12 10:10:00', 1, '2016-02-12 04:40:21', '2016-02-12 04:40:21'),
(38, 'Installing Composer for xampp in Ubuntu', 'Installing-Composer-for-xampp-in-Ubuntu', '<p>If you look for a way to install Composer for the machine which is powered with xampp, then here are the tweaks that you shall do.</p>\n\n<p><strong>Step 1 :&nbsp;</strong></p>\n\n<p>Get the composer&nbsp;</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php</code></div>\n\n<p><strong>Step 2&nbsp;:&nbsp;</strong></p>\n\n<p>Make it Global</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>sudo mv composer.phar /usr/local/bin/composer</code></div>\n\n<p><strong>Step 3&nbsp;:&nbsp;</strong></p>\n\n<p>symlink it</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><code>ln -s /opt/lampp/bin/php /usr/local/bin/php</code></div>\n\n<p>&nbsp;</p>\n\n<p><code>And you&#39;re done ;)</code></p>\n', 1, '2016-02-20 10:00:00', 1, '2016-02-18 03:36:06', '2016-02-18 03:36:06'),
(39, 'How to auth logout in laravel 5.2', 'How-to-auth-logout-in-laravel-5.2', '<p>This is just a quick note on how to logout the user if he is using Auth in Laravel 5.2</p>\n\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">\n<p>public function getLogout() {</p>\n\n<p>auth()-&gt;logout();</p>\n\n<p>return redirect(&#39;admin&#39;)-&gt;with(&#39;status&#39;, &#39;Logged out Successfully&#39;);</p>\n\n<p>}</p>\n</div>\n\n<p>Make usre that the user table has remember_token and updated_at coloumn ;)</p>\n\n<p>&nbsp;</p>\n\n<p>Happy Coding !!&nbsp;</p>\n', 1, '2016-03-11 11:00:00', 1, '2016-03-09 05:58:03', '2016-03-09 05:58:03'),
(40, 'testt indian', 'testt-indian', '<p>Test Indian</p>\n', 1, '2016-04-05 10:00:00', 1, '2016-04-03 16:54:37', '2016-04-03 16:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `user_id` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`id`, `blog_id`, `tag_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 3, '1', '2015-10-01 05:27:58', '2015-10-01 05:27:58'),
(7, 6, 1, '1', '2015-10-01 07:03:07', '2015-10-01 07:03:07'),
(13, 11, 1, '1', '2015-10-01 07:11:21', '2015-10-01 07:11:21'),
(14, 11, 2, '1', '2015-10-01 07:11:21', '2015-10-01 07:11:21'),
(17, 13, 1, '1', '2015-10-01 07:26:11', '2015-10-01 07:26:11'),
(18, 13, 6, '1', '2015-10-01 07:26:11', '2015-10-01 07:26:11'),
(26, 18, 4, '1', '2015-10-01 08:09:35', '2015-10-01 08:09:35'),
(27, 19, 4, '1', '2015-10-01 08:18:57', '2015-10-01 08:18:57'),
(28, 20, 1, '1', '2015-10-01 08:20:41', '2015-10-01 08:20:41'),
(29, 20, 2, '1', '2015-10-01 08:20:41', '2015-10-01 08:20:41'),
(30, 20, 7, '1', '2015-10-01 08:20:41', '2015-10-01 08:20:41'),
(61, 16, 1, '1', '2015-10-01 09:53:46', '2015-10-01 09:53:46'),
(62, 16, 4, '1', '2015-10-01 09:53:46', '2015-10-01 09:53:46'),
(65, 12, 1, '1', '2015-10-01 09:55:07', '2015-10-01 09:55:07'),
(66, 12, 2, '1', '2015-10-01 09:55:07', '2015-10-01 09:55:07'),
(80, 8, 1, '1', '2015-10-06 16:54:52', '2015-10-06 16:54:52'),
(81, 8, 5, '1', '2015-10-06 16:54:52', '2015-10-06 16:54:52'),
(82, 8, 1, '1', '2015-10-06 16:54:52', '2015-10-06 16:54:52'),
(83, 9, 3, '1', '2015-10-06 16:55:03', '2015-10-06 16:55:03'),
(84, 9, 6, '1', '2015-10-06 16:55:03', '2015-10-06 16:55:03'),
(91, 15, 1, '1', '2015-10-06 16:58:11', '2015-10-06 16:58:11'),
(92, 15, 3, '1', '2015-10-06 16:58:11', '2015-10-06 16:58:11'),
(93, 15, 6, '1', '2015-10-06 16:58:11', '2015-10-06 16:58:11'),
(114, 28, 4, '1', '2015-10-06 17:04:09', '2015-10-06 17:04:09'),
(115, 26, 1, '1', '2015-10-06 17:05:07', '2015-10-06 17:05:07'),
(116, 26, 3, '1', '2015-10-06 17:05:07', '2015-10-06 17:05:07'),
(117, 26, 5, '1', '2015-10-06 17:05:07', '2015-10-06 17:05:07'),
(118, 26, 1, '1', '2015-10-06 17:05:07', '2015-10-06 17:05:07'),
(126, 2, 1, '1', '2015-10-06 17:16:44', '2015-10-06 17:16:44'),
(127, 2, 4, '1', '2015-10-06 17:16:44', '2015-10-06 17:16:44'),
(132, 5, 1, '1', '2015-10-06 17:32:27', '2015-10-06 17:32:27'),
(135, 30, 14, '1', '2015-10-08 16:08:59', '2015-10-08 16:08:59'),
(136, 30, 15, '1', '2015-10-08 16:08:59', '2015-10-08 16:08:59'),
(137, 29, 15, '1', '2015-10-08 16:10:23', '2015-10-08 16:10:23'),
(138, 27, 5, '1', '2015-10-08 16:14:02', '2015-10-08 16:14:02'),
(139, 27, 16, '1', '2015-10-08 16:14:02', '2015-10-08 16:14:02'),
(140, 10, 1, '1', '2015-10-17 04:05:56', '2015-10-17 04:05:56'),
(141, 10, 2, '1', '2015-10-17 04:05:56', '2015-10-17 04:05:56'),
(142, 7, 12, '1', '2015-10-17 04:06:11', '2015-10-17 04:06:11'),
(143, 7, 13, '1', '2015-10-17 04:06:11', '2015-10-17 04:06:11'),
(144, 4, 9, '1', '2015-10-17 04:06:55', '2015-10-17 04:06:55'),
(145, 3, 1, '1', '2015-10-17 04:07:58', '2015-10-17 04:07:58'),
(146, 3, 10, '1', '2015-10-17 04:07:58', '2015-10-17 04:07:58'),
(147, 3, 15, '1', '2015-10-17 04:07:58', '2015-10-17 04:07:58'),
(148, 14, 5, '1', '2015-10-17 04:09:15', '2015-10-17 04:09:15'),
(149, 14, 10, '1', '2015-10-17 04:09:15', '2015-10-17 04:09:15'),
(150, 17, 1, '1', '2015-10-17 04:09:36', '2015-10-17 04:09:36'),
(151, 17, 5, '1', '2015-10-17 04:09:36', '2015-10-17 04:09:36'),
(152, 17, 6, '1', '2015-10-17 04:09:36', '2015-10-17 04:09:36'),
(153, 17, 9, '1', '2015-10-17 04:09:36', '2015-10-17 04:09:36'),
(154, 21, 1, '1', '2015-10-17 04:10:04', '2015-10-17 04:10:04'),
(155, 21, 6, '1', '2015-10-17 04:10:04', '2015-10-17 04:10:04'),
(156, 22, 1, '1', '2015-10-17 04:10:13', '2015-10-17 04:10:13'),
(157, 22, 2, '1', '2015-10-17 04:10:13', '2015-10-17 04:10:13'),
(158, 23, 1, '1', '2015-10-17 04:10:21', '2015-10-17 04:10:21'),
(159, 23, 6, '1', '2015-10-17 04:10:21', '2015-10-17 04:10:21'),
(160, 23, 9, '1', '2015-10-17 04:10:21', '2015-10-17 04:10:21'),
(161, 24, 3, '1', '2015-10-17 04:10:28', '2015-10-17 04:10:28'),
(162, 24, 9, '1', '2015-10-17 04:10:28', '2015-10-17 04:10:28'),
(163, 25, 1, '1', '2015-10-17 04:10:35', '2015-10-17 04:10:35'),
(170, 34, 5, '1', '2015-11-04 16:31:31', '2015-11-04 16:31:31'),
(171, 34, 17, '1', '2015-11-04 16:31:31', '2015-11-04 16:31:31'),
(175, 35, 1, '1', '2015-11-06 07:33:53', '2015-11-06 07:33:53'),
(176, 35, 2, '1', '2015-11-06 07:33:53', '2015-11-06 07:33:53'),
(177, 35, 18, '1', '2015-11-06 07:33:53', '2015-11-06 07:33:53'),
(180, 31, 1, '1', '2015-11-06 09:04:32', '2015-11-06 09:04:32'),
(181, 31, 2, '1', '2015-11-06 09:04:32', '2015-11-06 09:04:32'),
(182, 32, 9, '1', '2015-11-06 09:04:55', '2015-11-06 09:04:55'),
(184, 33, 9, '1', '2015-11-06 09:05:19', '2015-11-06 09:05:19'),
(186, 36, 19, '1', '2015-11-13 21:45:18', '2015-11-13 21:45:18'),
(187, 37, 1, '1', '2016-02-12 04:40:21', '2016-02-12 04:40:21'),
(188, 37, 2, '1', '2016-02-12 04:40:21', '2016-02-12 04:40:21'),
(189, 38, 1, '1', '2016-02-18 03:36:06', '2016-02-18 03:36:06'),
(190, 38, 2, '1', '2016-02-18 03:36:06', '2016-02-18 03:36:06'),
(191, 38, 12, '1', '2016-02-18 03:36:06', '2016-02-18 03:36:06'),
(192, 38, 20, '1', '2016-02-18 03:36:06', '2016-02-18 03:36:06'),
(193, 38, 21, '1', '2016-02-18 03:36:06', '2016-02-18 03:36:06'),
(194, 38, 22, '1', '2016-02-18 03:36:06', '2016-02-18 03:36:06'),
(195, 39, 1, '1', '2016-03-09 05:58:03', '2016-03-09 05:58:03'),
(196, 39, 2, '1', '2016-03-09 05:58:03', '2016-03-09 05:58:03'),
(197, 40, 1, '1', '2016-04-03 16:54:38', '2016-04-03 16:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `catTitle` varchar(100) NOT NULL,
  `catContent` longtext NOT NULL,
  `catStatus` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `catTitle`, `catContent`, `catStatus`, `created_at`, `updated_at`) VALUES
(1, 'Urgent', '<p>Its Really Urgent</p>\n', 1, '2015-11-14 11:41:19', '2015-11-14 11:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `stackoverflow` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `mobile`, `email`, `github`, `stackoverflow`, `twitter`, `facebook`, `skype`, `created_at`, `updated_at`) VALUES
(1, '9042445010', 'sa@sulthanallaudeen.com', 'https://github.com/sulthanallaudeen', 'stackoverflow.com/users/3282633', 'https://twitter.com/allaudeens', 'http://facebook.com/allaudeen.s', 'allaudeen.s', '2016-04-09 04:00:00', '2016-04-10 06:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `contactmail`
--

CREATE TABLE `contactmail` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(500) NOT NULL,
  `userMessage` varchar(500) NOT NULL,
  `messageStatus` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactmail`
--

INSERT INTO `contactmail` (`id`, `userEmail`, `userMessage`, `messageStatus`, `created_at`, `updated_at`) VALUES
(1, 'ram@ramji.com', 'insi is ', 0, '2015-10-08 18:16:14', '2016-04-09 14:15:15'),
(2, 'vis@visa.com', 'via contact', 0, '2015-10-10 02:35:35', '2016-04-09 14:15:17'),
(3, 'logs@sysaxiom.com', 'Random Check Message', 0, '2015-11-03 09:11:22', '2016-04-09 14:15:01'),
(4, 'test@tester.com', 'Hey, this is last time ', 0, '2015-12-31 13:31:58', '2015-12-31 13:31:58'),
(5, 'me@amandhanda.com', 'Hi Sulthan, I have got your contact from freelancer.com. This is regarding the project you have submitted on freelancer. "PSD to Website conversion". I can do this work. Please go through my works on my website www.amandhanda.com. Please let me know if you have any query. Thanks.', 0, '2016-01-31 07:38:56', '2016-01-31 07:38:56'),
(6, 'sa@sysaxiom.com', 'allaudeen', 0, '2016-04-09 07:11:07', '2016-04-09 07:11:07'),
(7, 'a@a.com', 'indian', 0, '2016-04-09 07:15:43', '2016-04-09 07:15:43'),
(8, 'a@a.com', 'indian', 0, '2016-04-09 07:15:50', '2016-04-09 07:15:50'),
(9, 'a@a.com', 'indian', 0, '2016-04-09 07:16:32', '2016-04-09 07:16:32'),
(10, 'a@a.com', 'indian', 0, '2016-04-09 07:41:58', '2016-04-09 07:41:58'),
(11, 'allaudeen.s@gmail.com', 'Here is the Msg', 0, '2016-04-09 07:42:57', '2016-04-09 07:42:57'),
(12, 'shankar@gmail.com', 'This new look was great !', 0, '2016-04-09 08:09:40', '2016-04-09 08:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `mailtemplate`
--

CREATE TABLE `mailtemplate` (
  `id` int(11) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mailtemplate`
--

INSERT INTO `mailtemplate` (`id`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 'User Access Log', '''\n<!DOCTYPE html>\n<html lang="en">\n<head>\n  <meta charset="utf-8"> <!-- utf-8 works for most cases -->\n	<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldnt be necessary -->\n	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->\n  <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->\n  <style type="text/css">\n\n  	/* What it does: Remove spaces around the email design added by some email clients. */\n  	/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */\n		html,\n		body {\n			margin: 0;\n			padding: 0;\n			height: 100% !important;\n			width: 100% !important;\n		}\n		\n		/* What it does: Stops email clients resizing small text. */\n		* {\n			-ms-text-size-adjust: 100%;\n			-webkit-text-size-adjust: 100%;\n		}\n		\n		/* What it does: Forces Outlook.com to display emails full width. */\n		.ExternalClass {\n			width: 100%;\n		}  \n		\n		/* What it does: Stops Outlook from adding extra spacing to tables. */\n		table,\n		td {\n			mso-table-lspace: 0pt;\n			mso-table-rspace: 0pt;\n		}\n		\n    /* What it does: Fixes webkit padding issue. */\n    table {\n			border-spacing:0 !important;\n    }\n\n		/* What it does: Fixes Outlook.com line height. */\n		.ExternalClass,\n		.ExternalClass * {\n    	line-height: 100%;\n		}\n		\n		/* What it does: Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */\n		table {\n		  border-collapse: collapse;\n		  margin: 0 auto;\n		}\n		\n		/* What it does: Uses a better rendering method when resizing images in IE. */\n		img {\n			-ms-interpolation-mode:bicubic;\n		}\n		\n    /* What it does: Overrides styles added when Yahoos auto-senses a link. */\n    .yshortcuts a {\n			border-bottom: none !important;\n    }\n    \n    /* What it does: Overrides blue, underlined links auto-detected by iOS Mail. */\n    /* More Info: https://litmus.com/blog/update-banning-blue-links-on-ios-devices */\n    .mobile-link--footer a {\n	    color: #666666 !important;\n    }\n    \n		/* What it does: Overrides styles added images. */\n		img {\n			border:0 !important;\n			outline:none !important;\n			text-decoration:none !important;\n		}\n\n		/* What it does: Apple Mail doesnt support max-width, so a media query constrains the email container width. */\n		@media  only screen and (min-width: 601px) {\n			.email-container {\n				width: 600px !important;\n			}\n		}\n          \n		/* What it does: Apple Mail doesnt support max-width, so a media query constrains the email container width. */\n		@media  only screen and (max-width: 600px) {\n			.email-container {\n				width: 100% !important;\n				max-width: none !important;\n			}\n		}\n          \n  </style>\n</head>\n<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#222222" style="margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;">\n<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#222222" style="border-collapse:collapse;"><tr><td>\n\n	<!-- Visually Hidden Preheader Text : BEGIN -->\n	<div style="display:none;font-size:1px;color:#222222;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide: all;">\n		User from : {{ip}} -> {{os}} -> {{browser}}-{{version}} on {{date}}	</div>\n	<!-- Visually Hidden Preheader Text : END -->\n\n  <!-- Outlook and Lotus Notes dont support max-width but are always on desktop, so we can enforce a wide, fixed width view. -->\n  <!-- Beginning of Outlook-specific wrapper : BEGIN -->\n	<!--[if (gte mso 9)|(IE)]>\n  <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">\n    <tr>\n      <td>\n  <![endif]-->\n  <!-- Beginning of Outlook-specific wrapper : END -->\n\n  <!-- Email wrapper : BEGIN -->\n  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="max-width:600px; margin:auto;" class="email-container">\n    <tr>\n    	<td>\n\n        <!-- Logo + Links : BEGIN -->\n        <table border="0" width="100%" cellpadding="0" cellspacing="0">\n          <tr>\n            <td valign="middle" style="padding:10px 0; text-align:left;" width="150">\n              <img src="http://www.sysaxiom.com/logo.png" alt="alt text" width="150" height="50" border="0" align="left">\n            </td>\n            <td valign="middle" style="padding:10px 0; text-align:right; line-height:1.1; font-family: sans-serif; font-size: 13px; color: #999999;">\n              <span>User Access Log Notification</span>\n            </td>\n          </tr>\n        </table>\n        <!-- Logo + Links : END -->\n  \n        <!-- Main Email Body : BEGIN -->\n        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">\n      \n          \n          <!-- Full Width, Fluid Column : END -->\n      		\n      		<!-- 2 x 2 grid : BEGIN -->\n          <tr>\n            <td>\n              \n						</td>\n		      </tr>\n      		<!-- 2 x 2 grid : END -->\n				\n          <!-- Data Table : BEGIN -->\n          <tr>\n            <td style="padding: 4%;">\n							<table cellspacing="0" cellpadding="0" border="0" width="100%" style="">\n								<tr>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">\n										User Ip : \n									</td>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">\n										Platform : \n										\n									</td>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">\n										Browser : \n									</td>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">\n										Version : \n									</td>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">\n										Date : \n									</td>\n								</tr>\n								<tr>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">\n										{{ip}}									</td>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">\n										{{os}}									</td>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">\n										{{browser}}									</td>\n										<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">\n										{{version}}									</td>\n									<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">\n										{{date}}									</td>\n								</tr>\n								\n								\n							</table>\n\n                          <a href="http://www.sysaxiom.com/accessLog/server" style="background: #222222; border: 15px solid #222222; color: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 1; text-align: center; text-decoration: none; display: block; border-radius: 3px;">\n                            <b>Access Full List</b>\n                          </a>\n            </td>\n          </tr>\n          <!-- Data Table : END -->\n\n        </table>\n        <!-- Main Email Body : END -->\n 	       \n      </td>\n		</tr>\n    \n    <!-- Footer : BEGIN -->\n    <tr>\n      <td style="text-align:center; padding:4% 0; font-family:sans-serif; font-size:13px; line-height:1.2; color:#666666;">\n        You received this email because you are the admin of Sysaxiom :p.\n        <br><br>\n        Sysaxiom &bull; <span class="mobile-link--footer">India</span> &bull; <span class="mobile-link--footer">(91) 904244-5010</span>\n        <br><br>\n        <unsubscribe style="color:#666666; text-decoration:underline;">unsubscribe</unsubscribe>\n      </td>\n    </tr>\n    <!-- Footer : END -->\n        \n  </table>\n  <!-- Email wrapper : END -->\n\n  <!-- End of Outlook-specific wrapper : BEGIN -->\n	<!--[if (gte mso 9)|(IE)]>\n      </td>\n    </tr>\n  </table>\n  <![endif]-->\n  <!-- End of Outlook-specific wrapper : END -->\n\n</td></tr></table>\n</body>\n</html>'';\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tagTitle` varchar(100) NOT NULL,
  `tagContent` longtext NOT NULL,
  `tagStatus` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tagTitle`, `tagContent`, `tagStatus`, `created_at`, `updated_at`) VALUES
(1, 'php', '<p>PHP is a popular general-purpose weakly-typed server-side scripting plus object oriented programming language that is especially suited for web development.</p>\n', 1, '2015-09-29 11:41:23', '2015-09-29 11:41:23'),
(2, 'laravel', '<p>Laravel is an open-source PHP web development MVC framework created by Taylor Otwell. Laravel helps you create applications using simple, expressive syntax.</p>\n', 1, '2015-09-29 11:41:53', '2015-09-29 11:41:53'),
(3, 'Sysaxiom', '<p>Post related to Sysaxiom</p>\n', 1, '2015-09-30 19:30:21', '2015-09-30 19:30:21'),
(4, 'jQuery', '<p>About JQuery</p>\n', 1, '2015-10-01 06:47:30', '2015-10-01 06:47:30'),
(5, 'Github', '<p>Github</p>\n', 1, '2015-10-01 07:05:23', '2015-10-01 07:05:23'),
(6, 'StackoverFlow', '<p>StackoverFlow</p>\n', 1, '2015-10-01 07:05:30', '2015-10-01 07:05:30'),
(7, 'Windows', '<p>Windows</p>\n', 1, '2015-10-01 07:05:36', '2015-10-01 07:05:36'),
(8, 'Windows', '<p>Windows</p>\n', 1, '2015-10-01 07:05:36', '2015-10-01 07:05:36'),
(9, 'Misc', '<p>Misc</p>\n', 1, '2015-10-01 07:05:42', '2015-10-01 07:05:42'),
(10, 'GoogleMaps', '<p>About&nbsp;GoogleMaps</p>\n', 1, '2015-10-06 16:46:40', '2015-10-06 16:46:40'),
(11, 'General Tips', '<p>This tag is about&nbsp;General Tips</p>\n', 1, '2015-10-06 16:48:17', '2015-10-06 16:48:17'),
(12, 'MySQL', '<p>This tag is about&nbsp;MySQL</p>\n', 1, '2015-10-06 16:51:36', '2015-10-06 16:51:36'),
(13, 'MySQL(i)', '<p>This is about&nbsp;MySQL(i)</p>\n', 1, '2015-10-06 16:51:48', '2015-10-06 16:51:48'),
(14, 'Google App Script', '<p>This tag is about&nbsp;Google App Script</p>\n', 1, '2015-10-06 17:01:28', '2015-10-06 17:01:28'),
(15, 'Google ', '<p>About&nbsp;Google</p>\n', 1, '2015-10-06 17:03:38', '2015-10-06 17:03:38'),
(16, 'Heroku', '<p>About Heroku</p>\n', 1, '2015-10-06 17:04:40', '2015-10-06 17:04:40'),
(17, 'Windows Phone', '<p>Windows Phone App Development</p>\n', 1, '2015-11-04 16:22:24', '2015-11-04 16:22:24'),
(18, 'Laravel - Middleware', '<p>Tag about Laravel Middleware -&gt;&nbsp;http://laravel.com/docs/5.1/middleware</p>\n', 1, '2015-11-06 07:24:46', '2015-11-06 07:24:46'),
(19, 'Personal', '<p>Its all about Personal of Sulthan Allaudeen</p>\n', 1, '2015-11-13 21:37:26', '2015-11-13 21:37:26'),
(20, 'Ubuntu', '<p>This tag is about Ubuntu</p>\n', 1, '2016-02-18 03:33:34', '2016-02-18 03:33:34'),
(21, 'Composer', '<p>This tag is about Composer Package Manager</p>\n', 1, '2016-02-18 03:34:06', '2016-02-18 03:34:06'),
(22, 'xampp', '<p>About XAMPP</p>\n', 1, '2016-02-18 03:34:55', '2016-02-18 03:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(500) NOT NULL,
  `task_details` longtext NOT NULL,
  `task_byuser` int(11) NOT NULL,
  `task_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `task_details`, `task_byuser`, `task_status`, `created_at`, `updated_at`) VALUES
(1, 'First Activity', 'This is the First Activity Posted directly to DB', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `task_cat`
--

CREATE TABLE `task_cat` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_status`
--

CREATE TABLE `task_status` (
  `id` int(11) NOT NULL,
  `status_name` int(11) NOT NULL,
  `status_percent` varchar(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(110) NOT NULL,
  `remember_token` varchar(110) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gcm_id` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `email`, `gcm_id`, `created_at`, `updated_at`) VALUES
(1, 'Sulthan Allaudeen', '$2y$10$x7JwK4bM/tRWB2D1dpDUMuKVpN1hSDqs0eyfkZnbxoFlWdKsnL482', '', 'sa@sulthanallaudeen.com', 'SAAA', '2015-08-29 13:50:47', '2016-04-09 14:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `platform` varchar(500) NOT NULL,
  `browser` varchar(300) NOT NULL,
  `version` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `ip`, `platform`, `browser`, `version`, `created_at`, `updated_at`) VALUES
(1, '117.213.133.208', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 01:17:26', '2015-10-15 01:17:26'),
(2, '117.213.133.208', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 01:17:38', '2015-10-15 01:17:38'),
(3, '66.249.79.188', 'iPhone', 'Apple Safari', '8.0', '2015-10-15 01:51:27', '2015-10-15 01:51:27'),
(4, '176.123.5.40', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-15 02:01:54', '2015-10-15 02:01:54'),
(5, '27.63.48.7', 'Android', 'Google Chrome', '45.0.2454.94', '2015-10-15 03:07:19', '2015-10-15 03:07:19'),
(6, '27.63.48.7', 'Android', 'Google Chrome', '45.0.2454.94', '2015-10-15 03:11:44', '2015-10-15 03:11:44'),
(7, '184.168.27.78', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-15 03:32:37', '2015-10-15 03:32:37'),
(8, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 03:53:44', '2015-10-15 03:53:44'),
(9, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 04:13:36', '2015-10-15 04:13:36'),
(10, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 04:28:07', '2015-10-15 04:28:07'),
(11, '23.94.173.166', 'Windows 7', 'Google Chrome', '41.0.2228.0', '2015-10-15 05:44:56', '2015-10-15 05:44:56'),
(12, '49.207.183.156', 'Windows 8.1', 'Google Chrome', '45.0.2454.101', '2015-10-15 06:53:32', '2015-10-15 06:53:32'),
(13, '183.83.49.72', 'Mac OS X', 'Mozilla Firefox', '41.0', '2015-10-15 07:04:26', '2015-10-15 07:04:26'),
(14, '182.74.246.202', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 07:09:17', '2015-10-15 07:09:17'),
(15, '183.83.49.72', 'Ubuntu', 'Mozilla Firefox', '28.0', '2015-10-15 07:10:43', '2015-10-15 07:10:43'),
(16, '1.39.80.39', 'Android', 'Google Chrome', '45.0.2454.94', '2015-10-15 07:13:32', '2015-10-15 07:13:32'),
(17, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-15 07:33:58', '2015-10-15 07:33:58'),
(18, '108.179.248.75', 'Windows XP', 'Google Chrome', '5.0.375.99', '2015-10-15 07:44:05', '2015-10-15 07:44:05'),
(19, '49.207.183.156', 'Windows 8.1', 'Google Chrome', '45.0.2454.101', '2015-10-15 08:03:24', '2015-10-15 08:03:24'),
(20, '49.207.183.156', 'Windows 8.1', 'Google Chrome', '45.0.2454.101', '2015-10-15 08:03:33', '2015-10-15 08:03:33'),
(21, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 09:31:07', '2015-10-15 09:31:07'),
(22, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 09:31:28', '2015-10-15 09:31:28'),
(23, '150.70.97.122', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-15 09:32:18', '2015-10-15 09:32:18'),
(24, '150.70.97.97', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-15 09:41:46', '2015-10-15 09:41:46'),
(25, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 12:21:11', '2015-10-15 12:21:11'),
(26, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 12:21:31', '2015-10-15 12:21:31'),
(27, '150.70.173.8', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-15 12:23:03', '2015-10-15 12:23:03'),
(28, '117.197.192.236', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-15 12:33:29', '2015-10-15 12:33:29'),
(29, '150.70.97.112', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-15 12:35:16', '2015-10-15 12:35:16'),
(30, '76.164.192.45', 'Windows 8.1', 'Google Chrome', '45.0.2454.99', '2015-10-15 13:19:10', '2015-10-15 13:19:10'),
(31, '223.235.203.122', 'Android', 'Google Chrome', '45.0.2454.94', '2015-10-15 14:15:41', '2015-10-15 14:15:41'),
(32, '195.154.146.225', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-15 14:22:44', '2015-10-15 14:22:44'),
(33, '177.39.244.156', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-15 19:48:55', '2015-10-15 19:48:55'),
(34, '176.9.50.43', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-10-15 22:12:11', '2015-10-15 22:12:11'),
(35, '189.164.166.38', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-15 23:19:12', '2015-10-15 23:19:12'),
(36, '117.203.66.209', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-16 08:57:15', '2015-10-16 08:57:15'),
(37, '23.232.235.76', 'Linux', 'Google Chrome', '39.0.2171.99', '2015-10-16 10:05:15', '2015-10-16 10:05:15'),
(38, '177.41.103.75', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-16 10:37:49', '2015-10-16 10:37:49'),
(39, '177.74.21.1', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-16 11:49:46', '2015-10-16 11:49:46'),
(40, '76.164.192.45', 'Windows XP', 'Mozilla Firefox', '40.0', '2015-10-16 13:10:27', '2015-10-16 13:10:27'),
(41, '187.12.42.166', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-16 13:11:03', '2015-10-16 13:11:03'),
(42, '122.165.113.29', 'Windows 7', 'Mozilla Firefox', '41.0', '2015-10-16 13:28:56', '2015-10-16 13:28:56'),
(43, '88.207.123.101', 'Linux', 'Google Chrome', '46.0.2490.71', '2015-10-16 20:48:26', '2015-10-16 20:48:26'),
(44, '76.164.192.45', 'Windows 10', 'Mozilla Firefox', '41.0', '2015-10-16 22:07:51', '2015-10-16 22:07:51'),
(45, '104.131.25.244', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-10-17 03:25:47', '2015-10-17 03:25:47'),
(46, '117.213.100.191', 'Windows 7', 'Google Chrome', '46.0.2490.71', '2015-10-17 04:04:42', '2015-10-17 04:04:42'),
(47, '150.70.97.114', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-17 04:06:13', '2015-10-17 04:06:13'),
(48, '117.213.100.191', 'Windows 7', 'Google Chrome', '46.0.2490.71', '2015-10-17 04:11:03', '2015-10-17 04:11:03'),
(49, '150.70.173.38', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-17 04:11:26', '2015-10-17 04:11:26'),
(50, '8.28.16.254', 'Windows XP', 'Internet Explorer', '7.0', '2015-10-17 04:16:12', '2015-10-17 04:16:12'),
(51, '182.65.170.178', 'Windows 7', 'Google Chrome', '46.0.2490.71', '2015-10-17 05:31:09', '2015-10-17 05:31:09'),
(52, '107.169.2.59', 'Ubuntu', 'Mozilla Firefox', '34.0', '2015-10-17 07:18:29', '2015-10-17 07:18:29'),
(53, '150.70.173.38', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-17 08:21:42', '2015-10-17 08:21:42'),
(54, '54.162.129.199', 'Linux', 'Apple Safari', '538.1', '2015-10-17 08:40:15', '2015-10-17 08:40:15'),
(55, '177.66.251.83', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-17 10:23:27', '2015-10-17 10:23:27'),
(56, '66.249.74.50', 'iPhone', 'Apple Safari', '8.0', '2015-10-17 11:12:42', '2015-10-17 11:12:42'),
(57, '195.154.146.225', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-17 13:05:36', '2015-10-17 13:05:36'),
(58, '151.74.109.140', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-17 13:27:40', '2015-10-17 13:27:40'),
(59, '23.247.140.15', 'Ubuntu', 'Mozilla Firefox', '34.0', '2015-10-17 13:49:08', '2015-10-17 13:49:08'),
(60, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-17 16:41:07', '2015-10-17 16:41:07'),
(61, '45.55.133.252', 'Mac OS X', 'Google Chrome', '35.0.1916.114', '2015-10-17 23:16:49', '2015-10-17 23:16:49'),
(62, '195.154.146.225', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-18 04:00:47', '2015-10-18 04:00:47'),
(63, '192.80.158.218', 'Windows 8', 'Opera', '12.17', '2015-10-18 13:24:18', '2015-10-18 13:24:18'),
(64, '104.238.147.218', 'Windows XP', 'Google Chrome', '5.0.375.99', '2015-10-18 14:39:22', '2015-10-18 14:39:22'),
(65, '192.255.101.26', 'Windows 8', 'Opera', '12.17', '2015-10-18 18:14:56', '2015-10-18 18:14:56'),
(66, '5.135.209.62', 'Windows 8', 'Opera', '12.17', '2015-10-18 18:19:58', '2015-10-18 18:19:58'),
(67, '94.249.224.88', 'Windows 8', 'Opera', '12.17', '2015-10-19 00:38:59', '2015-10-19 00:38:59'),
(68, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '41.0', '2015-10-19 01:41:24', '2015-10-19 01:41:24'),
(69, '123.136.214.123', 'Windows 10', 'Google Chrome', '46.0.2490.71', '2015-10-19 07:03:04', '2015-10-19 07:03:04'),
(70, '49.207.186.182', 'Windows 7', 'Google Chrome', '46.0.2490.71', '2015-10-19 10:44:25', '2015-10-19 10:44:25'),
(71, '49.207.186.182', 'Windows 7', 'Google Chrome', '46.0.2490.71', '2015-10-19 10:52:37', '2015-10-19 10:52:37'),
(72, '76.164.192.45', 'Windows 10', 'Google Chrome', '45.0.2454.99', '2015-10-19 14:36:05', '2015-10-19 14:36:05'),
(73, '23.94.173.166', 'Windows 7', 'Google Chrome', '41.0.2228.0', '2015-10-19 18:55:27', '2015-10-19 18:55:27'),
(74, '59.100.39.47', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-19 22:55:03', '2015-10-19 22:55:03'),
(75, '192.255.101.106', 'Mac OS X', 'Mozilla Firefox', '34.0', '2015-10-19 23:03:25', '2015-10-19 23:03:25'),
(76, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-19 23:55:24', '2015-10-19 23:55:24'),
(77, '201.150.159.12', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-20 01:06:23', '2015-10-20 01:06:23'),
(78, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '41.0', '2015-10-20 09:40:32', '2015-10-20 09:40:32'),
(79, '66.249.74.52', 'iPhone', 'Apple Safari', '8.0', '2015-10-20 10:05:39', '2015-10-20 10:05:39'),
(80, '177.83.248.188', 'Windows 7', 'Google Chrome', '32.0.1700.107', '2015-10-20 18:56:17', '2015-10-20 18:56:17'),
(81, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-20 19:02:04', '2015-10-20 19:02:04'),
(82, '197.32.13.98', 'Windows 7', 'Google Chrome', '32.0.1700.107', '2015-10-20 22:54:17', '2015-10-20 22:54:17'),
(83, '5.135.209.62', 'Mac OS X', 'Mozilla Firefox', '35.0', '2015-10-21 01:28:32', '2015-10-21 01:28:32'),
(84, '62.212.73.49', 'Windows 7', 'Google Chrome', '44.0.2403.125', '2015-10-21 05:27:47', '2015-10-21 05:27:47'),
(85, '23.95.192.12', 'Mac OS X', 'Mozilla Firefox', '35.0', '2015-10-21 08:27:20', '2015-10-21 08:27:20'),
(86, '117.97.202.57', 'Windows 8.1', 'Google Chrome', '46.0.2490.71', '2015-10-21 10:24:24', '2015-10-21 10:24:24'),
(87, '76.164.192.45', 'Windows 8.1', 'Google Chrome', '45.0.2454.101', '2015-10-21 11:04:25', '2015-10-21 11:04:25'),
(88, '106.208.125.233', 'Windows 8.1', 'Google Chrome', '46.0.2490.71', '2015-10-21 11:14:01', '2015-10-21 11:14:01'),
(89, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '40.0', '2015-10-21 14:24:34', '2015-10-21 14:24:34'),
(90, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-21 19:01:53', '2015-10-21 19:01:53'),
(91, '83.143.242.120', 'Mac OS X', 'Mozilla Firefox', '35.0', '2015-10-21 20:27:06', '2015-10-21 20:27:06'),
(92, '93.71.201.77', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-21 20:35:42', '2015-10-21 20:35:42'),
(93, '155.94.240.132', 'Mac OS X', 'Mozilla Firefox', '35.0', '2015-10-21 23:35:46', '2015-10-21 23:35:46'),
(94, '195.154.146.225', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-22 03:45:36', '2015-10-22 03:45:36'),
(95, '150.70.97.123', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-22 04:25:17', '2015-10-22 04:25:17'),
(96, '121.97.136.203', 'Windows 7', 'Google Chrome', '35.0.1916.153', '2015-10-22 05:19:51', '2015-10-22 05:19:51'),
(97, '203.133.171.14', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-10-22 07:30:28', '2015-10-22 07:30:28'),
(98, '70.50.157.191', 'Ubuntu', 'Google Chrome', '45.0.2454.101', '2015-10-22 07:43:39', '2015-10-22 07:43:39'),
(99, '5.9.36.66', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-10-22 07:45:37', '2015-10-22 07:45:37'),
(100, '52.20.151.197', 'Mac OS X', 'Google Chrome', '26.0.1410.65', '2015-10-22 10:16:20', '2015-10-22 10:16:20'),
(101, '52.20.151.197', 'Mac OS X', 'Google Chrome', '26.0.1410.65', '2015-10-22 10:16:22', '2015-10-22 10:16:22'),
(102, '152.250.196.4', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-22 10:42:15', '2015-10-22 10:42:15'),
(103, '158.69.129.98', 'Windows XP', 'Opera', '8.50', '2015-10-22 11:39:34', '2015-10-22 11:39:34'),
(104, '87.1.85.222', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-22 12:26:19', '2015-10-22 12:26:19'),
(105, '66.249.74.54', 'iPhone', 'Apple Safari', '8.0', '2015-10-22 12:32:29', '2015-10-22 12:32:29'),
(106, '93.127.158.77', 'Mac OS X', 'Google Chrome', '39.0.2171.95', '2015-10-22 15:07:17', '2015-10-22 15:07:17'),
(107, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-22 18:46:24', '2015-10-22 18:46:24'),
(108, '79.117.6.224', 'Windows 7', 'Google Chrome', '46.0.2490.71', '2015-10-22 20:30:34', '2015-10-22 20:30:34'),
(109, '76.164.192.45', 'Windows 10', 'Google Chrome', '45.0.2454.101', '2015-10-22 21:30:13', '2015-10-22 21:30:13'),
(110, '195.154.146.225', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-22 22:29:25', '2015-10-22 22:29:25'),
(111, '76.164.192.45', 'Windows 8.1', 'Google Chrome', '45.0.2454.101', '2015-10-23 09:18:04', '2015-10-23 09:18:04'),
(112, '76.164.192.45', 'Windows 10', 'Mozilla Firefox', '41.0', '2015-10-23 11:20:39', '2015-10-23 11:20:39'),
(113, '104.236.225.99', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-10-23 17:08:33', '2015-10-23 17:08:33'),
(114, '104.236.225.99', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-10-23 17:08:34', '2015-10-23 17:08:34'),
(115, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-23 18:33:23', '2015-10-23 18:33:23'),
(116, '201.34.89.233', 'Windows 7', 'Google Chrome', '32.0.1700.107', '2015-10-23 18:52:58', '2015-10-23 18:52:58'),
(117, '149.202.98.160', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-10-23 19:25:04', '2015-10-23 19:25:04'),
(118, '186.210.215.8', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-24 00:04:44', '2015-10-24 00:04:44'),
(119, '66.249.74.52', 'iPhone', 'Apple Safari', '8.0', '2015-10-24 10:04:18', '2015-10-24 10:04:18'),
(120, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-24 12:47:53', '2015-10-24 12:47:53'),
(121, '76.164.192.45', 'Windows 10', 'Google Chrome', '45.0.2454.101', '2015-10-24 13:44:20', '2015-10-24 13:44:20'),
(122, '195.154.146.225', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-24 13:59:32', '2015-10-24 13:59:32'),
(123, '116.193.139.1', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-24 14:55:57', '2015-10-24 14:55:57'),
(124, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-24 18:31:42', '2015-10-24 18:31:42'),
(125, '66.249.74.50', 'iPhone', 'Apple Safari', '8.0', '2015-10-25 10:28:26', '2015-10-25 10:28:26'),
(126, '89.0.182.101', 'Mac OS X', 'Apple Safari', '9.0', '2015-10-25 10:31:46', '2015-10-25 10:31:46'),
(127, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-25 18:52:57', '2015-10-25 18:52:57'),
(128, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.85', '2015-10-26 00:03:45', '2015-10-26 00:03:45'),
(129, '195.154.146.225', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-26 00:07:06', '2015-10-26 00:07:06'),
(130, '142.4.212.142', 'Mac OS X', 'Apple Safari', '8.0.2', '2015-10-26 01:53:20', '2015-10-26 01:53:20'),
(131, '158.69.129.98', 'Windows XP', 'Opera', '8.50', '2015-10-26 05:48:34', '2015-10-26 05:48:34'),
(132, '46.229.170.197', 'Linux', 'Mozilla Firefox', '4.2a1pre', '2015-10-26 06:32:12', '2015-10-26 06:32:12'),
(133, '122.174.25.161', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-10-26 07:27:39', '2015-10-26 07:27:39'),
(134, '212.83.131.217', 'Mac OS X', 'Google Chrome', '39.0.2171.95', '2015-10-26 09:32:52', '2015-10-26 09:32:52'),
(135, '66.249.74.52', 'iPhone', 'Apple Safari', '8.0', '2015-10-26 10:25:56', '2015-10-26 10:25:56'),
(136, '76.164.192.45', 'Windows 10', 'Google Chrome', '45.0.2454.99', '2015-10-26 10:43:30', '2015-10-26 10:43:30'),
(137, '177.129.160.18', 'Windows 7', 'Google Chrome', '35.0.1916.153', '2015-10-26 10:45:04', '2015-10-26 10:45:04'),
(138, '151.79.192.74', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-26 11:21:26', '2015-10-26 11:21:26'),
(139, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-26 19:37:17', '2015-10-26 19:37:17'),
(140, '187.15.59.146', 'Windows 7', 'Google Chrome', '32.0.1700.107', '2015-10-26 21:50:09', '2015-10-26 21:50:09'),
(141, '201.75.1.91', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-27 00:09:04', '2015-10-27 00:09:04'),
(142, '67.202.2.123', 'Windows Vista', 'Mozilla Firefox', '3.6.3', '2015-10-27 02:02:18', '2015-10-27 02:02:18'),
(143, '66.249.74.54', 'iPhone', 'Apple Safari', '8.0', '2015-10-27 10:57:43', '2015-10-27 10:57:43'),
(144, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.93', '2015-10-27 12:57:24', '2015-10-27 12:57:24'),
(145, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-27 17:09:32', '2015-10-27 17:09:32'),
(146, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-27 18:50:40', '2015-10-27 18:50:40'),
(147, '5.196.67.41', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-10-28 07:26:18', '2015-10-28 07:26:18'),
(148, '66.249.74.54', 'iPhone', 'Apple Safari', '8.0', '2015-10-28 10:38:32', '2015-10-28 10:38:32'),
(149, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-28 19:21:40', '2015-10-28 19:21:40'),
(150, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '40.0', '2015-10-28 20:13:52', '2015-10-28 20:13:52'),
(151, '95.130.9.140', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-10-28 22:47:23', '2015-10-28 22:47:23'),
(152, '176.123.5.40', 'Windows XP', 'Internet Explorer', '6.0', '2015-10-29 07:44:53', '2015-10-29 07:44:53'),
(153, '150.70.97.119', 'Windows XP', 'Internet Explorer', '8.0', '2015-10-29 08:24:21', '2015-10-29 08:24:21'),
(154, '66.249.67.239', 'iPhone', 'Apple Safari', '8.0', '2015-10-29 09:50:51', '2015-10-29 09:50:51'),
(155, '117.197.187.121', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-10-29 10:14:13', '2015-10-29 10:14:13'),
(156, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.101', '2015-10-29 11:49:23', '2015-10-29 11:49:23'),
(157, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-29 19:16:13', '2015-10-29 19:16:13'),
(158, '177.80.103.73', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-29 21:10:21', '2015-10-29 21:10:21'),
(159, '45.55.146.21', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-10-30 03:43:48', '2015-10-30 03:43:48'),
(160, '203.101.73.51', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 07:12:10', '2015-10-30 07:12:10'),
(161, '66.249.74.114', 'iPhone', 'Apple Safari', '8.0', '2015-10-30 08:35:46', '2015-10-30 08:35:46'),
(162, '76.164.192.45', 'Windows 10', 'Google Chrome', '45.0.2454.101', '2015-10-30 13:11:38', '2015-10-30 13:11:38'),
(163, '2.177.12.170', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:42:38', '2015-10-30 17:42:38'),
(164, '2.177.12.170', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:42:52', '2015-10-30 17:42:52'),
(165, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:43:07', '2015-10-30 17:43:07'),
(166, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:43:21', '2015-10-30 17:43:21'),
(167, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:43:36', '2015-10-30 17:43:36'),
(168, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:43:51', '2015-10-30 17:43:51'),
(169, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:44:07', '2015-10-30 17:44:07'),
(170, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:44:22', '2015-10-30 17:44:22'),
(171, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:44:37', '2015-10-30 17:44:37'),
(172, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:44:52', '2015-10-30 17:44:52'),
(173, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:45:08', '2015-10-30 17:45:08'),
(174, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:45:26', '2015-10-30 17:45:26'),
(175, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:45:39', '2015-10-30 17:45:39'),
(176, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:45:55', '2015-10-30 17:45:55'),
(177, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:46:09', '2015-10-30 17:46:09'),
(178, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:46:25', '2015-10-30 17:46:25'),
(179, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:46:41', '2015-10-30 17:46:41'),
(180, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:46:55', '2015-10-30 17:46:55'),
(181, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:47:11', '2015-10-30 17:47:11'),
(182, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:47:26', '2015-10-30 17:47:26'),
(183, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:47:42', '2015-10-30 17:47:42'),
(184, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:47:57', '2015-10-30 17:47:57'),
(185, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:48:13', '2015-10-30 17:48:13'),
(186, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:48:27', '2015-10-30 17:48:27'),
(187, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:48:47', '2015-10-30 17:48:47'),
(188, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:48:58', '2015-10-30 17:48:58'),
(189, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:49:14', '2015-10-30 17:49:14'),
(190, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:49:29', '2015-10-30 17:49:29'),
(191, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:49:44', '2015-10-30 17:49:44'),
(192, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:49:59', '2015-10-30 17:49:59'),
(193, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:50:14', '2015-10-30 17:50:14'),
(194, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:50:30', '2015-10-30 17:50:30'),
(195, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:50:45', '2015-10-30 17:50:45'),
(196, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:51:00', '2015-10-30 17:51:00'),
(197, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:51:15', '2015-10-30 17:51:15'),
(198, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:51:31', '2015-10-30 17:51:31'),
(199, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:51:46', '2015-10-30 17:51:46'),
(200, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:52:01', '2015-10-30 17:52:01'),
(201, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:52:16', '2015-10-30 17:52:16'),
(202, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:52:31', '2015-10-30 17:52:31'),
(203, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:52:47', '2015-10-30 17:52:47'),
(204, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:53:02', '2015-10-30 17:53:02'),
(205, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:53:17', '2015-10-30 17:53:17'),
(206, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:53:33', '2015-10-30 17:53:33'),
(207, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:53:48', '2015-10-30 17:53:48'),
(208, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:54:03', '2015-10-30 17:54:03'),
(209, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:54:18', '2015-10-30 17:54:18'),
(210, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:54:34', '2015-10-30 17:54:34'),
(211, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:54:49', '2015-10-30 17:54:49'),
(212, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:55:04', '2015-10-30 17:55:04'),
(213, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:55:20', '2015-10-30 17:55:20'),
(214, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:55:35', '2015-10-30 17:55:35'),
(215, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:55:50', '2015-10-30 17:55:50'),
(216, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:56:06', '2015-10-30 17:56:06'),
(217, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:56:21', '2015-10-30 17:56:21'),
(218, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:56:38', '2015-10-30 17:56:38'),
(219, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:56:52', '2015-10-30 17:56:52'),
(220, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:57:07', '2015-10-30 17:57:07'),
(221, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:57:22', '2015-10-30 17:57:22'),
(222, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:57:38', '2015-10-30 17:57:38'),
(223, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:57:53', '2015-10-30 17:57:53'),
(224, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:58:08', '2015-10-30 17:58:08'),
(225, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:58:25', '2015-10-30 17:58:25'),
(226, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:58:40', '2015-10-30 17:58:40'),
(227, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:58:55', '2015-10-30 17:58:55'),
(228, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:59:11', '2015-10-30 17:59:11'),
(229, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:59:27', '2015-10-30 17:59:27'),
(230, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:59:43', '2015-10-30 17:59:43'),
(231, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 17:59:57', '2015-10-30 17:59:57'),
(232, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:00:12', '2015-10-30 18:00:12'),
(233, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:00:28', '2015-10-30 18:00:28'),
(234, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:00:43', '2015-10-30 18:00:43'),
(235, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:00:59', '2015-10-30 18:00:59'),
(236, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:01:14', '2015-10-30 18:01:14'),
(237, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:01:29', '2015-10-30 18:01:29'),
(238, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:01:51', '2015-10-30 18:01:51'),
(239, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:02:01', '2015-10-30 18:02:01'),
(240, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:02:16', '2015-10-30 18:02:16'),
(241, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:02:31', '2015-10-30 18:02:31'),
(242, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:02:46', '2015-10-30 18:02:46'),
(243, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:03:02', '2015-10-30 18:03:02'),
(244, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:03:17', '2015-10-30 18:03:17'),
(245, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:03:34', '2015-10-30 18:03:34'),
(246, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:03:49', '2015-10-30 18:03:49'),
(247, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:04:04', '2015-10-30 18:04:04'),
(248, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:04:18', '2015-10-30 18:04:18'),
(249, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:04:36', '2015-10-30 18:04:36'),
(250, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:04:49', '2015-10-30 18:04:49'),
(251, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:05:04', '2015-10-30 18:05:04'),
(252, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:05:20', '2015-10-30 18:05:20'),
(253, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:05:35', '2015-10-30 18:05:35'),
(254, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:05:51', '2015-10-30 18:05:51'),
(255, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:06:07', '2015-10-30 18:06:07'),
(256, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:06:22', '2015-10-30 18:06:22'),
(257, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:06:38', '2015-10-30 18:06:38'),
(258, '69.22.174.193', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-30 18:06:53', '2015-10-30 18:06:53'),
(259, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-30 18:41:44', '2015-10-30 18:41:44'),
(260, '109.163.234.2', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-10-30 23:07:27', '2015-10-30 23:07:27'),
(261, '198.46.140.218', 'Windows XP', 'Mozilla Firefox', '34.0', '2015-10-31 01:12:48', '2015-10-31 01:12:48'),
(262, '76.164.192.45', 'Windows 10', 'Google Chrome', '45.0.2454.99', '2015-10-31 01:36:04', '2015-10-31 01:36:04'),
(263, '72.52.94.234', 'Windows 7', 'Mozilla Firefox', '3.6.4', '2015-10-31 04:30:46', '2015-10-31 04:30:46'),
(264, '66.249.74.114', 'iPhone', 'Apple Safari', '8.0', '2015-10-31 08:58:02', '2015-10-31 08:58:02'),
(265, '177.68.3.133', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-31 13:12:43', '2015-10-31 13:12:43'),
(266, '76.164.192.45', 'Windows 8.1', 'Mozilla Firefox', '40.0', '2015-10-31 13:41:21', '2015-10-31 13:41:21'),
(267, '201.19.145.63', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-31 13:42:44', '2015-10-31 13:42:44'),
(268, '201.19.145.63', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-31 13:42:48', '2015-10-31 13:42:48'),
(269, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '41.0', '2015-10-31 15:01:18', '2015-10-31 15:01:18'),
(270, '82.58.90.85', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-10-31 15:33:09', '2015-10-31 15:33:09'),
(271, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-10-31 18:52:52', '2015-10-31 18:52:52'),
(272, '117.216.102.189', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-10-31 20:38:14', '2015-10-31 20:38:14'),
(273, '66.249.74.110', 'iPhone', 'Apple Safari', '8.0', '2015-11-01 08:45:21', '2015-11-01 08:45:21'),
(274, '198.96.88.72', 'Windows Vista', 'Mozilla Firefox', '34.0', '2015-11-01 15:43:46', '2015-11-01 15:43:46'),
(275, '200.158.33.38', 'Windows 7', 'Google Chrome', '32.0.1700.107', '2015-11-01 17:39:04', '2015-11-01 17:39:04'),
(276, '89.0.173.79', 'Mac OS X', 'Apple Safari', '9.0', '2015-11-01 17:48:49', '2015-11-01 17:48:49'),
(277, '76.164.192.45', 'Windows 8.1', 'Google Chrome', '45.0.2454.99', '2015-11-01 18:17:54', '2015-11-01 18:17:54'),
(278, '94.77.199.98', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-11-01 18:19:10', '2015-11-01 18:19:10'),
(279, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-01 18:58:58', '2015-11-01 18:58:58'),
(280, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '40.0', '2015-11-02 01:45:03', '2015-11-02 01:45:03'),
(281, '199.1.129.92', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-11-02 03:50:13', '2015-11-02 03:50:13'),
(282, '108.166.168.158', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-11-02 05:44:25', '2015-11-02 05:44:25'),
(283, '66.249.74.114', 'iPhone', 'Apple Safari', '8.0', '2015-11-02 07:45:07', '2015-11-02 07:45:07'),
(284, '81.89.96.88', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-11-02 13:37:11', '2015-11-02 13:37:11'),
(285, '203.133.170.8', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-11-02 14:41:27', '2015-11-02 14:41:27'),
(286, '122.174.180.101', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-02 18:46:11', '2015-11-02 18:46:11'),
(287, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-02 19:49:58', '2015-11-02 19:49:58'),
(288, '179.180.69.71', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-11-02 19:55:10', '2015-11-02 19:55:10'),
(289, '177.98.59.69', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-11-03 02:12:24', '2015-11-03 02:12:24'),
(290, '122.174.9.101', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-03 05:16:48', '2015-11-03 05:16:48'),
(291, '103.52.52.145', 'Mac OS X', 'Google Chrome', '46.0.2490.80', '2015-11-03 06:03:50', '2015-11-03 06:03:50'),
(292, '66.249.74.114', 'iPhone', 'Apple Safari', '8.0', '2015-11-03 08:06:29', '2015-11-03 08:06:29'),
(293, '177.138.191.248', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-11-03 15:58:36', '2015-11-03 15:58:36'),
(294, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '41.0', '2015-11-03 16:09:52', '2015-11-03 16:09:52'),
(295, '76.164.192.45', 'Windows 10', 'Google Chrome', '45.0.2454.101', '2015-11-03 18:08:19', '2015-11-03 18:08:19'),
(296, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-03 20:16:54', '2015-11-03 20:16:54'),
(297, '23.232.235.214', 'Windows 7', 'Google Chrome', '39.0.2171.95', '2015-11-03 23:07:37', '2015-11-03 23:07:37'),
(298, '67.55.84.212', 'Linux', 'Google Chrome', '43.0.2357.124', '2015-11-04 00:57:01', '2015-11-04 00:57:01'),
(299, '201.187.95.117', 'Windows XP', 'Mozilla Firefox', '2.0.0.11', '2015-11-04 05:06:50', '2015-11-04 05:06:50'),
(300, '192.240.224.245', 'Windows 7', 'Google Chrome', '39.0.2171.95', '2015-11-04 05:59:26', '2015-11-04 05:59:26'),
(301, '54.236.173.116', 'Windows 7', 'Google Chrome', '39.0.2171.71', '2015-11-04 11:03:25', '2015-11-04 11:03:25'),
(302, '91.141.2.158', 'Windows 7', 'Mozilla Firefox', '41.0', '2015-11-04 14:28:13', '2015-11-04 14:28:13'),
(303, '117.216.111.251', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-04 16:31:50', '2015-11-04 16:31:50'),
(304, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-04 19:38:11', '2015-11-04 19:38:11'),
(305, '45.55.133.241', 'Windows 7', 'Internet Explorer', '10.0', '2015-11-04 20:01:18', '2015-11-04 20:01:18'),
(306, '76.164.192.45', 'Windows 10', 'Mozilla Firefox', '41.0', '2015-11-04 21:46:34', '2015-11-04 21:46:34'),
(307, '80.79.119.252', 'Windows 8.1', 'Mozilla Firefox', '40.0', '2015-11-05 01:26:31', '2015-11-05 01:26:31'),
(308, '109.163.234.5', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-11-05 02:40:02', '2015-11-05 02:40:02'),
(309, '76.164.192.45', 'Windows 8.1', 'Google Chrome', '45.0.2454.99', '2015-11-05 07:28:42', '2015-11-05 07:28:42'),
(310, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-05 19:55:05', '2015-11-05 19:55:05'),
(311, '150.70.173.58', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-06 04:05:45', '2015-11-06 04:05:45'),
(312, '150.70.97.98', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-06 04:12:11', '2015-11-06 04:12:11'),
(313, '150.70.97.69', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-06 04:13:26', '2015-11-06 04:13:26'),
(314, '66.249.74.110', 'iPhone', 'Apple Safari', '8.0', '2015-11-06 05:08:59', '2015-11-06 05:08:59'),
(315, '150.70.97.98', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-06 07:31:47', '2015-11-06 07:31:47'),
(316, '107.189.60.70', 'Unknown OS Platform', 'Mozilla Firefox', '38.0', '2015-11-06 07:46:22', '2015-11-06 07:46:22'),
(317, '117.197.203.244', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-06 18:56:42', '2015-11-06 18:56:42'),
(318, '117.197.203.244', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-06 18:57:44', '2015-11-06 18:57:44'),
(319, '117.197.203.244', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-06 18:58:27', '2015-11-06 18:58:27'),
(320, '117.197.203.244', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-06 19:00:05', '2015-11-06 19:00:05'),
(321, '64.233.173.206', 'Android', 'Google Chrome', '46.0.2490.76', '2015-11-06 19:46:29', '2015-11-06 19:46:29'),
(322, '64.233.173.249', 'Android', 'Google Chrome', '46.0.2490.76', '2015-11-06 19:47:00', '2015-11-06 19:47:00'),
(323, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-06 19:58:49', '2015-11-06 19:58:49'),
(324, '31.205.1.117', 'Windows 10', 'Google Chrome', '46.0.2490.80', '2015-11-06 20:12:44', '2015-11-06 20:12:44'),
(325, '76.164.192.45', 'Windows 7', 'Mozilla Firefox', '40.0', '2015-11-06 20:15:37', '2015-11-06 20:15:37'),
(326, '64.233.173.201', 'Android', 'Google Chrome', '46.0.2490.76', '2015-11-06 21:36:19', '2015-11-06 21:36:19'),
(327, '107.173.248.108', 'Windows 7', 'Mozilla Firefox', '34.0', '2015-11-06 21:43:04', '2015-11-06 21:43:04'),
(328, '64.233.173.196', 'Android', 'Google Chrome', '46.0.2490.76', '2015-11-07 03:12:31', '2015-11-07 03:12:31'),
(329, '64.233.173.206', 'Android', 'Google Chrome', '46.0.2490.76', '2015-11-07 03:22:58', '2015-11-07 03:22:58'),
(330, '117.216.106.213', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-07 03:53:28', '2015-11-07 03:53:28'),
(331, '117.216.106.213', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-07 03:53:41', '2015-11-07 03:53:41'),
(332, '150.70.173.43', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-07 03:55:22', '2015-11-07 03:55:22'),
(333, '150.70.97.97', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-07 04:01:16', '2015-11-07 04:01:16'),
(334, '150.70.173.39', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-07 04:03:35', '2015-11-07 04:03:35'),
(335, '8.28.16.254', 'Windows XP', 'Internet Explorer', '7.0', '2015-11-07 04:03:43', '2015-11-07 04:03:43'),
(336, '117.216.106.213', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-07 04:33:17', '2015-11-07 04:33:17'),
(337, '93.115.95.204', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-11-07 10:34:21', '2015-11-07 10:34:21'),
(338, '5.15.63.246', 'Ubuntu', 'Mozilla Firefox', '42.0', '2015-11-07 11:29:57', '2015-11-07 11:29:57'),
(339, '5.15.63.246', 'Ubuntu', 'Mozilla Firefox', '42.0', '2015-11-07 11:30:08', '2015-11-07 11:30:08'),
(340, '117.213.131.102', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-07 12:19:20', '2015-11-07 12:19:20'),
(341, '150.70.188.167', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-07 12:20:20', '2015-11-07 12:20:20'),
(342, '187.56.148.76', 'Windows 7', 'Google Chrome', '32.0.1700.107', '2015-11-07 12:29:04', '2015-11-07 12:29:04'),
(343, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-07 20:09:37', '2015-11-07 20:09:37'),
(344, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.85', '2015-11-07 22:26:07', '2015-11-07 22:26:07'),
(345, '212.18.225.173', 'Windows 7', 'Google Chrome', '39.0.2171.65', '2015-11-08 03:00:26', '2015-11-08 03:00:26'),
(346, '23.94.54.70', 'Windows 7', 'Mozilla Firefox', '35.0', '2015-11-08 04:51:38', '2015-11-08 04:51:38'),
(347, '52.32.47.254', 'Windows 7', 'Google Chrome', '39.0.2171.71', '2015-11-08 09:10:32', '2015-11-08 09:10:32'),
(348, '207.90.2.137', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-08 19:47:04', '2015-11-08 19:47:04'),
(349, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-08 19:47:04', '2015-11-08 19:47:04'),
(350, '54.158.241.168', 'Ubuntu', 'Mozilla Firefox', '30.0', '2015-11-08 20:13:33', '2015-11-08 20:13:33'),
(351, '187.10.200.117', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-11-08 21:51:57', '2015-11-08 21:51:57'),
(352, '52.27.45.5', 'Windows 7', 'Google Chrome', '39.0.2171.71', '2015-11-09 07:29:33', '2015-11-09 07:29:33'),
(353, '187.2.110.188', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-11-09 10:17:06', '2015-11-09 10:17:06'),
(354, '52.10.37.249', 'Windows 7', 'Google Chrome', '39.0.2171.71', '2015-11-09 16:12:53', '2015-11-09 16:12:53'),
(355, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-09 19:49:00', '2015-11-09 19:49:00'),
(356, '66.249.74.110', 'iPhone', 'Apple Safari', '8.0', '2015-11-10 01:14:13', '2015-11-10 01:14:13'),
(357, '45.55.229.99', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-11-10 03:41:16', '2015-11-10 03:41:16'),
(358, '80.79.125.106', 'Windows Vista', 'Mozilla Firefox', '31.0', '2015-11-10 09:37:56', '2015-11-10 09:37:56'),
(359, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-10 20:22:36', '2015-11-10 20:22:36'),
(360, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.99', '2015-11-11 00:49:36', '2015-11-11 00:49:36'),
(361, '150.70.97.130', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-11 10:14:01', '2015-11-11 10:14:01'),
(362, '66.249.74.114', 'iPhone', 'Apple Safari', '8.0', '2015-11-11 16:35:03', '2015-11-11 16:35:03'),
(363, '188.165.206.188', 'Ubuntu', 'Mozilla Firefox', '26.0', '2015-11-11 17:48:51', '2015-11-11 17:48:51'),
(364, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-11 20:15:31', '2015-11-11 20:15:31'),
(365, '46.229.170.197', 'Linux', 'Mozilla Firefox', '4.0.1', '2015-11-11 21:26:32', '2015-11-11 21:26:32'),
(366, '89.114.88.30', 'Windows 10', 'Google Chrome', '46.0.2490.80', '2015-11-12 04:15:23', '2015-11-12 04:15:23'),
(367, '76.164.192.45', 'Windows 7', 'Google Chrome', '43.0.2357.124', '2015-11-12 04:49:55', '2015-11-12 04:49:55'),
(368, '52.2.209.254', 'Mac OS X', 'Google Chrome', '26.0.1410.65', '2015-11-12 05:23:56', '2015-11-12 05:23:56'),
(369, '54.87.110.27', 'Windows Vista', 'Mozilla Firefox', '3.6.3', '2015-11-12 08:32:13', '2015-11-12 08:32:13'),
(370, '192.169.96.100', 'Windows 7', 'Mozilla Firefox', '3.5.6', '2015-11-12 10:31:28', '2015-11-12 10:31:28'),
(371, '192.169.96.100', 'Windows 7', 'Mozilla Firefox', '3.5.6', '2015-11-12 10:31:58', '2015-11-12 10:31:58'),
(372, '95.226.161.13', 'Windows 8.1', 'Mozilla Firefox', '42.0', '2015-11-12 10:47:56', '2015-11-12 10:47:56'),
(373, '188.49.19.190', 'Windows 7', 'Mozilla Firefox', '42.0', '2015-11-12 12:17:34', '2015-11-12 12:17:34'),
(374, '76.164.192.45', 'Windows 7', 'Google Chrome', '45.0.2454.99', '2015-11-12 12:26:48', '2015-11-12 12:26:48'),
(375, '195.14.180.130', 'Windows 7', 'Mozilla Firefox', '42.0', '2015-11-12 13:38:20', '2015-11-12 13:38:20'),
(376, '114.44.208.139', 'Windows 7', 'Google Chrome', '39.0.2171.95', '2015-11-12 15:34:31', '2015-11-12 15:34:31'),
(377, '52.27.7.158', 'Windows 7', 'Google Chrome', '39.0.2171.71', '2015-11-12 15:55:27', '2015-11-12 15:55:27'),
(378, '41.150.87.57', 'Ubuntu', 'Google Chrome', '45.0.2454.101', '2015-11-12 16:00:58', '2015-11-12 16:00:58'),
(379, '45.55.137.222', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-11-12 18:47:36', '2015-11-12 18:47:36'),
(380, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-12 19:53:32', '2015-11-12 19:53:32'),
(381, '52.27.158.199', 'Windows 7', 'Google Chrome', '39.0.2171.71', '2015-11-13 08:50:27', '2015-11-13 08:50:27'),
(382, '188.34.241.112', 'Windows 10', 'Google Chrome', '46.0.2490.86', '2015-11-13 09:54:56', '2015-11-13 09:54:56'),
(383, '150.70.97.98', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-13 12:11:58', '2015-11-13 12:11:58'),
(384, '122.174.60.27', 'Windows 8.1', 'Google Chrome', '46.0.2490.86', '2015-11-20 11:59:19', '2015-11-20 11:59:19'),
(385, '122.174.60.27', 'Windows 8.1', 'Google Chrome', '46.0.2490.86', '2015-11-20 11:59:44', '2015-11-20 11:59:44'),
(386, '66.102.6.131', 'Linux', 'Google Chrome', '27.0.1453', '2015-11-20 12:49:13', '2015-11-20 12:49:13'),
(387, '45.55.135.226', 'Windows 7', 'Google Chrome', '34.0.1847.131', '2015-11-20 13:09:50', '2015-11-20 13:09:50'),
(388, '95.122.32.254', 'Linux', 'Google Chrome', '42.0.2311.135', '2015-11-20 13:11:09', '2015-11-20 13:11:09'),
(389, '95.122.32.254', 'Linux', 'Google Chrome', '42.0.2311.135', '2015-11-20 13:11:56', '2015-11-20 13:11:56'),
(390, '216.38.216.197', 'Mac OS X', 'Google Chrome', '13.0.782.215', '2015-11-20 14:33:19', '2015-11-20 14:33:19'),
(391, '216.38.216.197', 'Mac OS X', 'Google Chrome', '13.0.782.215', '2015-11-20 14:33:19', '2015-11-20 14:33:19'),
(392, '216.163.188.225', 'Windows 7', 'Mozilla Firefox', '27.0', '2015-11-20 14:39:18', '2015-11-20 14:39:18'),
(393, '89.242.217.147', 'Windows XP', 'Mozilla Firefox', '42.0', '2015-11-20 21:10:26', '2015-11-20 21:10:26'),
(394, '62.24.181.134', 'Windows XP', 'Internet Explorer', '8.0', '2015-11-20 21:50:56', '2015-11-20 21:50:56'),
(395, '66.249.79.195', 'iPhone', 'Apple Safari', '8.0', '2015-11-21 06:08:07', '2015-11-21 06:08:07'),
(396, '64.79.100.13', 'Windows 7', 'Google Chrome', '39.0.2171.95', '2015-11-21 08:34:03', '2015-11-21 08:34:03'),
(397, '67.55.84.212', 'Linux', 'Google Chrome', '43.0.2357.124', '2015-11-21 13:40:41', '2015-11-21 13:40:41'),
(398, '66.249.66.104', 'iPhone', 'Apple Safari', '8.0', '2015-11-21 22:22:47', '2015-11-21 22:22:47'),
(399, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-21 22:57:44', '2015-11-21 22:57:44'),
(400, '45.55.229.91', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-11-21 23:45:10', '2015-11-21 23:45:10'),
(401, '133.130.54.151', 'Mac OS X', 'Google Chrome', '42.0.2311.90', '2015-11-23 17:21:03', '2015-11-23 17:21:03'),
(402, '178.192.173.130', 'Mac OS X', 'Apple Safari', '9.0.1', '2015-11-23 20:11:01', '2015-11-23 20:11:01'),
(403, '66.249.79.195', 'Unknown OS Platform', 'Google Chrome', '27.0.1453', '2015-11-23 23:08:32', '2015-11-23 23:08:32'),
(404, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-24 01:53:41', '2015-11-24 01:53:41'),
(405, '64.246.165.170', 'Windows XP', 'Mozilla Firefox', '3.5.2', '2015-11-24 09:49:07', '2015-11-24 09:49:07'),
(406, '182.65.183.85', 'Windows 10', 'Google Chrome', '46.4.2490.80', '2015-11-24 11:46:02', '2015-11-24 11:46:02'),
(407, '66.249.79.181', 'iPhone', 'Apple Safari', '8.0', '2015-11-24 13:22:50', '2015-11-24 13:22:50'),
(408, '176.31.24.29', 'Ubuntu', 'Google Chrome', '40.0.2241.22', '2015-11-24 14:54:26', '2015-11-24 14:54:26'),
(409, '94.23.217.201', 'Windows 7', 'Mozilla Firefox', '34.0', '2015-11-24 16:59:11', '2015-11-24 16:59:11'),
(410, '107.168.10.52', 'Windows 8', 'Google Chrome', '39.0.2171.99', '2015-11-24 19:10:57', '2015-11-24 19:10:57'),
(411, '107.173.218.171', 'Windows 8', 'Google Chrome', '39.0.2171.99', '2015-11-24 20:46:48', '2015-11-24 20:46:48'),
(412, '73.1.155.4', 'Windows 8', 'Google Chrome', '39.0.2171.95', '2015-11-25 12:00:38', '2015-11-25 12:00:38'),
(413, '66.249.74.114', 'iPhone', 'Apple Safari', '8.0', '2015-11-25 14:52:00', '2015-11-25 14:52:00'),
(414, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-26 06:22:22', '2015-11-26 06:22:22'),
(415, '191.237.212.91', 'Windows 8', 'Internet Explorer', '7.0', '2015-11-26 13:16:15', '2015-11-26 13:16:15'),
(416, '66.249.79.181', 'iPhone', 'Apple Safari', '8.0', '2015-11-26 15:39:25', '2015-11-26 15:39:25'),
(417, '45.55.133.242', 'Mac OS X', 'Apple Safari', '7.0.3', '2015-11-26 16:10:40', '2015-11-26 16:10:40'),
(418, '96.126.98.111', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-11-26 21:32:49', '2015-11-26 21:32:49'),
(419, '192.99.10.173', 'Windows 10', 'Mozilla Firefox', '42.0', '2015-11-27 03:01:36', '2015-11-27 03:01:36'),
(420, '197.250.195.116', 'Windows 7', 'Google Chrome', '46.0.2490.86', '2015-11-27 04:29:13', '2015-11-27 04:29:13'),
(421, '46.229.170.197', 'Windows Server 2003/XP x64', 'Mozilla Firefox', '4.0b13pre', '2015-11-27 05:34:53', '2015-11-27 05:34:53'),
(422, '45.32.131.61', 'Windows 7', 'Google Chrome', '40.0.2214.115', '2015-11-27 06:44:07', '2015-11-27 06:44:07'),
(423, '112.133.244.105', 'Windows 8.1', 'Mozilla Firefox', '42.0', '2015-11-27 11:51:06', '2015-11-27 11:51:06'),
(424, '117.218.59.99', 'Windows 7', 'Google Chrome', '46.0.2490.86', '2015-11-27 12:35:04', '2015-11-27 12:35:04'),
(425, '66.249.66.100', 'iPhone', 'Apple Safari', '8.0', '2015-11-27 12:37:00', '2015-11-27 12:37:00'),
(426, '182.65.72.99', 'Windows 8.1', 'Google Chrome', '46.0.2490.86', '2015-11-27 13:44:26', '2015-11-27 13:44:26'),
(427, '222.153.60.26', 'Windows 7', 'Google Chrome', '46.0.2490.86', '2015-11-28 03:02:21', '2015-11-28 03:02:21'),
(428, '222.153.60.26', 'Windows 7', 'Google Chrome', '46.0.2490.86', '2015-11-28 03:06:13', '2015-11-28 03:06:13'),
(429, '223.196.63.2', 'Windows 8.1', 'Google Chrome', '46.0.2490.86', '2015-11-28 09:20:59', '2015-11-28 09:20:59'),
(430, '223.196.63.2', 'Windows 8.1', 'Google Chrome', '46.0.2490.86', '2015-11-28 09:27:30', '2015-11-28 09:27:30'),
(431, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-28 09:31:38', '2015-11-28 09:31:38'),
(432, '66.249.79.188', 'Unknown OS Platform', 'Google Chrome', '27.0.1453', '2015-11-28 12:44:20', '2015-11-28 12:44:20'),
(433, '125.16.34.230', 'Windows 8', 'Google Chrome', '46.0.2490.86', '2015-11-28 13:06:05', '2015-11-28 13:06:05'),
(434, '66.249.79.188', 'iPhone', 'Apple Safari', '8.0', '2015-11-28 15:14:46', '2015-11-28 15:14:46'),
(435, '66.249.79.188', 'Unknown OS Platform', 'Google Chrome', '27.0.1453', '2015-11-29 06:03:22', '2015-11-29 06:03:22'),
(436, '45.55.229.167', 'Windows 7', 'Internet Explorer', '10.0', '2015-11-29 06:38:39', '2015-11-29 06:38:39'),
(437, '45.32.131.61', 'Windows 7', 'Google Chrome', '40.0.2214.115', '2015-11-29 17:31:43', '2015-11-29 17:31:43'),
(438, '5.249.164.161', 'Windows XP', 'Mozilla Firefox', '33.0', '2015-11-30 06:24:58', '2015-11-30 06:24:58'),
(439, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-11-30 12:22:58', '2015-11-30 12:22:58'),
(440, '66.249.74.114', 'iPhone', 'Apple Safari', '8.0', '2015-11-30 23:11:42', '2015-11-30 23:11:42'),
(441, '203.133.170.7', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-01 06:46:40', '2015-12-01 06:46:40'),
(442, '203.133.171.11', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-01 06:48:29', '2015-12-01 06:48:29'),
(443, '37.156.74.31', 'Windows 8.1', 'Google Chrome', '39.0.2171.95', '2015-12-01 08:03:08', '2015-12-01 08:03:08'),
(444, '66.249.79.188', 'iPhone', 'Apple Safari', '8.0', '2015-12-01 10:04:32', '2015-12-01 10:04:32'),
(445, '94.23.217.201', 'Windows 7', 'Mozilla Firefox', '34.0', '2015-12-01 17:18:17', '2015-12-01 17:18:17'),
(446, '36.233.83.84', 'Windows 7', 'Mozilla Firefox', '26.0', '2015-12-02 00:13:56', '2015-12-02 00:13:56');
INSERT INTO `user_log` (`id`, `ip`, `platform`, `browser`, `version`, `created_at`, `updated_at`) VALUES
(447, '36.233.83.84', 'Windows 7', 'Mozilla Firefox', '26.0', '2015-12-02 00:13:56', '2015-12-02 00:13:56'),
(448, '203.133.168.82', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-02 08:26:56', '2015-12-02 08:26:56'),
(449, '203.133.169.225', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-02 09:44:57', '2015-12-02 09:44:57'),
(450, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-12-02 16:57:02', '2015-12-02 16:57:02'),
(451, '192.99.10.173', 'Windows 10', 'Mozilla Firefox', '42.0', '2015-12-03 13:14:46', '2015-12-03 13:14:46'),
(452, '66.249.74.112', 'iPhone', 'Apple Safari', '8.0', '2015-12-04 02:18:29', '2015-12-04 02:18:29'),
(453, '66.249.67.237', 'iPhone', 'Apple Safari', '8.0', '2015-12-04 11:05:20', '2015-12-04 11:05:20'),
(454, '23.232.235.62', 'Windows 8.1', 'Mozilla Firefox', '35.0', '2015-12-04 13:06:54', '2015-12-04 13:06:54'),
(455, '45.79.92.177', 'Mac OS X', 'Google Chrome', '46.0.2490.86', '2015-12-04 15:48:38', '2015-12-04 15:48:38'),
(456, '66.249.79.188', 'Unknown OS Platform', 'Google Chrome', '27.0.1453', '2015-12-05 02:09:28', '2015-12-05 02:09:28'),
(457, '45.79.66.5', 'Windows 7', 'Google Chrome', '46.0.2490.80', '2015-12-05 02:57:11', '2015-12-05 02:57:11'),
(458, '23.247.140.45', 'Windows 8.1', 'Mozilla Firefox', '35.0', '2015-12-05 03:54:45', '2015-12-05 03:54:45'),
(459, '45.55.133.239', 'Windows 8.1', 'Google Chrome', '34.0.1847.131', '2015-12-05 19:51:35', '2015-12-05 19:51:35'),
(460, '104.236.239.159', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-12-06 12:22:27', '2015-12-06 12:22:27'),
(461, '192.255.101.215', 'Unknown OS Platform', 'Google Chrome', '39.0.2171.96', '2015-12-06 19:42:54', '2015-12-06 19:42:54'),
(462, '31.220.30.64', 'Linux', 'Mozilla Firefox', '17.0', '2015-12-07 09:04:34', '2015-12-07 09:04:34'),
(463, '104.156.230.231', 'Windows 7', 'Google Chrome', '40.0.2214.115', '2015-12-07 10:46:46', '2015-12-07 10:46:46'),
(464, '203.133.171.12', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-07 10:52:41', '2015-12-07 10:52:41'),
(465, '203.133.168.18', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-07 11:13:59', '2015-12-07 11:13:59'),
(466, '37.156.74.42', 'Linux', 'Mozilla Firefox', '17.0', '2015-12-07 15:22:01', '2015-12-07 15:22:01'),
(467, '106.208.238.117', 'Android', 'Apple Safari', '4.0', '2015-12-07 15:34:15', '2015-12-07 15:34:15'),
(468, '106.208.238.117', 'Android', 'Apple Safari', '4.0', '2015-12-07 15:37:12', '2015-12-07 15:37:12'),
(469, '106.208.238.117', 'Android', 'Apple Safari', '4.0', '2015-12-07 15:37:29', '2015-12-07 15:37:29'),
(470, '88.160.113.18', 'Windows 10', 'Mozilla Firefox', '44.0', '2015-12-08 05:30:01', '2015-12-08 05:30:01'),
(471, '66.249.69.63', 'iPhone', 'Apple Safari', '8.0', '2015-12-08 14:37:39', '2015-12-08 14:37:39'),
(472, '62.210.37.113', 'Windows 7', 'Mozilla Firefox', '34.0', '2015-12-08 17:24:04', '2015-12-08 17:24:04'),
(473, '54.84.139.195', 'Linux', 'Apple Safari', '534.34', '2015-12-08 21:37:04', '2015-12-08 21:37:04'),
(474, '104.156.230.231', 'Windows 7', 'Google Chrome', '40.0.2214.115', '2015-12-08 22:14:34', '2015-12-08 22:14:34'),
(475, '66.249.69.55', 'Unknown OS Platform', 'Google Chrome', '27.0.1453', '2015-12-08 23:12:46', '2015-12-08 23:12:46'),
(476, '186.215.202.221', 'Windows 8', 'Internet Explorer', '7.0', '2015-12-09 02:57:32', '2015-12-09 02:57:32'),
(477, '122.163.252.8', 'Windows 8', 'Google Chrome', '46.0.2490.86', '2015-12-09 07:37:45', '2015-12-09 07:37:45'),
(478, '122.163.252.8', 'Windows 8', 'Google Chrome', '46.0.2490.86', '2015-12-09 07:39:18', '2015-12-09 07:39:18'),
(479, '64.246.165.10', 'Windows XP', 'Mozilla Firefox', '3.5.2', '2015-12-09 09:12:47', '2015-12-09 09:12:47'),
(480, '122.172.76.189', 'Windows 7', 'Google Chrome', '47.0.2526.73', '2015-12-09 09:50:45', '2015-12-09 09:50:45'),
(481, '207.90.2.10', 'Windows 7', 'Google Chrome', '10.0.648.204', '2015-12-09 10:12:57', '2015-12-09 10:12:57'),
(482, '23.232.145.164', 'Ubuntu', 'Mozilla Firefox', '34.0', '2015-12-09 16:19:10', '2015-12-09 16:19:10'),
(483, '66.249.75.1', 'iPhone', 'Apple Safari', '8.0', '2015-12-09 19:17:17', '2015-12-09 19:17:17'),
(484, '192.240.224.136', 'Ubuntu', 'Mozilla Firefox', '34.0', '2015-12-09 21:25:47', '2015-12-09 21:25:47'),
(485, '188.240.88.21', 'Windows 8', 'Opera', '12.17', '2015-12-10 08:12:03', '2015-12-10 08:12:03'),
(486, '188.240.88.21', 'Windows 8', 'Opera', '12.17', '2015-12-10 08:23:33', '2015-12-10 08:23:33'),
(487, '203.133.169.25', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-10 08:52:44', '2015-12-10 08:52:44'),
(488, '66.249.69.63', 'iPhone', 'Apple Safari', '8.0', '2015-12-10 14:08:20', '2015-12-10 14:08:20'),
(489, '23.232.176.183', 'Windows 8', 'Opera', '12.17', '2015-12-10 18:30:09', '2015-12-10 18:30:09'),
(490, '79.68.227.208', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-12-10 23:08:06', '2015-12-10 23:08:06'),
(491, '75.127.11.125', 'Windows 8', 'Opera', '12.17', '2015-12-10 23:18:05', '2015-12-10 23:18:05'),
(492, '54.145.165.199', 'Windows Vista', 'Mozilla Firefox', '3.6.3', '2015-12-11 14:49:54', '2015-12-11 14:49:54'),
(493, '103.251.83.62', 'Windows XP', 'Internet Explorer', '6.0', '2015-12-11 23:24:39', '2015-12-11 23:24:39'),
(494, '130.185.139.213', 'Windows 8.1', 'Google Chrome', '36.0.1985.143', '2015-12-12 00:01:54', '2015-12-12 00:01:54'),
(495, '23.232.176.140', 'Mac OS X', 'Mozilla Firefox', '34.0', '2015-12-12 06:11:36', '2015-12-12 06:11:36'),
(496, '182.65.216.230', 'Windows 7', 'Google Chrome', '47.0.2526.80', '2015-12-12 06:26:30', '2015-12-12 06:26:30'),
(497, '69.58.178.57', 'Ubuntu', 'Mozilla Firefox', '14.0.1', '2015-12-12 07:07:06', '2015-12-12 07:07:06'),
(498, '46.229.170.197', 'Windows 7', 'Mozilla Firefox', '4.0b10', '2015-12-13 00:30:17', '2015-12-13 00:30:17'),
(499, '45.33.61.138', 'Mac OS X', 'Google Chrome', '46.0.2490.86', '2015-12-13 04:42:20', '2015-12-13 04:42:20'),
(500, '38.100.21.171', 'Windows Server 2003/XP x64', 'Internet Explorer', '7.0', '2015-12-13 04:44:08', '2015-12-13 04:44:08'),
(501, '66.249.75.112', 'iPhone', 'Apple Safari', '8.0', '2015-12-13 06:20:49', '2015-12-13 06:20:49'),
(502, '66.249.69.63', 'Unknown OS Platform', 'Google Chrome', '27.0.1453', '2015-12-13 13:46:34', '2015-12-13 13:46:34'),
(503, '45.55.229.154', 'Windows 7', 'Mozilla Firefox', '21.0', '2015-12-13 13:46:56', '2015-12-13 13:46:56'),
(504, '45.33.104.237', 'Windows 10', 'Google Chrome', '42.0.2311.135', '2015-12-13 17:21:25', '2015-12-13 17:21:25'),
(505, '191.205.17.128', 'Windows 7', 'Google Chrome', '32.0.1700.107', '2015-12-13 20:51:54', '2015-12-13 20:51:54'),
(506, '66.249.73.205', 'iPhone', 'Apple Safari', '8.0', '2015-12-13 22:35:53', '2015-12-13 22:35:53'),
(507, '203.133.169.22', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-14 00:47:32', '2015-12-14 00:47:32'),
(508, '212.47.238.193', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-12-14 02:32:05', '2015-12-14 02:32:05'),
(509, '104.207.150.177', 'Windows 7', 'Google Chrome', '40.0.2214.115', '2015-12-14 05:36:10', '2015-12-14 05:36:10'),
(510, '66.249.73.213', 'Unknown OS Platform', 'Google Chrome', '27.0.1453', '2015-12-14 07:34:05', '2015-12-14 07:34:05'),
(511, '89.187.142.208', 'Linux', 'Google Chrome', '37.0.2062.120', '2015-12-14 08:47:43', '2015-12-14 08:47:43'),
(512, '5.249.164.23', 'Windows 8.1', 'Google Chrome', '45.0.2454.99', '2015-12-14 12:17:29', '2015-12-14 12:17:29'),
(513, '179.215.254.118', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-12-14 13:16:08', '2015-12-14 13:16:08'),
(514, '186.118.238.59', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-12-14 16:33:10', '2015-12-14 16:33:10'),
(515, '191.209.20.46', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-12-14 19:45:26', '2015-12-14 19:45:26'),
(516, '23.95.244.103', 'Mac OS X', 'Google Chrome', '39.0.2171.95', '2015-12-14 21:50:09', '2015-12-14 21:50:09'),
(517, '179.180.100.246', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-12-14 22:12:30', '2015-12-14 22:12:30'),
(518, '138.59.208.94', 'Windows 7', 'Google Chrome', '36.0.1985.143', '2015-12-15 00:00:52', '2015-12-15 00:00:52'),
(519, '45.55.133.238', 'Windows 7', 'Google Chrome', '34.0.1847.131', '2015-12-15 07:26:48', '2015-12-15 07:26:48'),
(520, '203.133.170.90', 'Unknown OS Platform', 'Internet Explorer', 'or', '2015-12-15 11:01:43', '2015-12-15 11:01:43'),
(521, '94.23.217.201', 'Windows 7', 'Mozilla Firefox', '34.0', '2015-12-15 17:40:02', '2015-12-15 17:40:02'),
(522, '45.32.129.200', 'Windows 7', 'Google Chrome', '40.0.2214.115', '2015-12-15 17:51:38', '2015-12-15 17:51:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmail`
--
ALTER TABLE `contactmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailtemplate`
--
ALTER TABLE `mailtemplate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_cat`
--
ALTER TABLE `task_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_status`
--
ALTER TABLE `task_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactmail`
--
ALTER TABLE `contactmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mailtemplate`
--
ALTER TABLE `mailtemplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `task_cat`
--
ALTER TABLE `task_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `task_status`
--
ALTER TABLE `task_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=523;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
