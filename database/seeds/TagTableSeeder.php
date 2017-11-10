<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tag')->delete();
        
        \DB::table('tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'php',
                'content' => '<p>PHP is a popular general-purpose weakly-typed server-side scripting plus object oriented programming language that is especially suited for web development.</p>
',
                'count' => 27,
                'status' => 1,
                'created_at' => '2015-09-29 06:11:23',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'laravel',
                'content' => '<p>Laravel is an open-source PHP web development MVC framework created by Taylor Otwell. Laravel helps you create applications using simple, expressive syntax.</p>
',
                'count' => 10,
                'status' => 1,
                'created_at' => '2015-09-29 06:11:53',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Sysaxiom',
                'content' => '<p>Post related to Sysaxiom</p>
',
                'count' => 5,
                'status' => 1,
                'created_at' => '2015-09-30 14:00:21',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'jQuery',
                'content' => '<p>About JQuery</p>
',
                'count' => 6,
                'status' => 1,
                'created_at' => '2015-10-01 01:17:30',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Github',
                'content' => '<p>Github</p>
',
                'count' => 7,
                'status' => 1,
                'created_at' => '2015-10-01 01:35:23',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'StackoverFlow',
                'content' => '<p>StackoverFlow</p>
',
                'count' => 6,
                'status' => 1,
                'created_at' => '2015-10-01 01:35:30',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Windows',
                'content' => '<p>Windows</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2015-10-01 01:35:36',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Windows',
                'content' => '<p>Windows</p>
',
                'count' => 0,
                'status' => 1,
                'created_at' => '2015-10-01 01:35:36',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Misc',
                'content' => '<p>Misc</p>
',
                'count' => 6,
                'status' => 1,
                'created_at' => '2015-10-01 01:35:42',
                'updated_at' => '2017-11-01 09:23:05',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'GoogleMaps',
                'content' => '<p>About&nbsp;GoogleMaps</p>
',
                'count' => 2,
                'status' => 1,
                'created_at' => '2015-10-06 11:16:40',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'General Tips',
                'content' => '<p>This tag is about&nbsp;General Tips</p>
',
                'count' => 0,
                'status' => 1,
                'created_at' => '2015-10-06 11:18:17',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'MySQL',
                'content' => '<p>This tag is about&nbsp;MySQL</p>
',
                'count' => 2,
                'status' => 1,
                'created_at' => '2015-10-06 11:21:36',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            12 => 
            array (
                'id' => 13,
            'title' => 'MySQL(i)',
            'content' => '<p>This is about&nbsp;MySQL(i)</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2015-10-06 11:21:48',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Google App Script',
                'content' => '<p>This tag is about&nbsp;Google App Script</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2015-10-06 11:31:28',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Google ',
                'content' => '<p>About&nbsp;Google</p>
',
                'count' => 4,
                'status' => 1,
                'created_at' => '2015-10-06 11:33:38',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Heroku',
                'content' => '<p>About Heroku</p>
',
                'count' => 4,
                'status' => 1,
                'created_at' => '2015-10-06 11:34:40',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Windows Phone',
                'content' => '<p>Windows Phone App Development</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2015-11-04 10:52:24',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Laravel - Middleware',
                'content' => '<p>Tag about Laravel Middleware -&gt;&nbsp;http://laravel.com/docs/5.1/middleware</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2015-11-06 01:54:46',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Personal',
                'content' => '<p>Its all about Personal of Sulthan Allaudeen</p>
',
                'count' => 4,
                'status' => 1,
                'created_at' => '2015-11-13 16:07:26',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Ubuntu',
                'content' => '<p>This tag is about Ubuntu</p>
',
                'count' => 3,
                'status' => 1,
                'created_at' => '2016-02-17 22:03:34',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Composer',
                'content' => '<p>This tag is about Composer Package Manager</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2016-02-17 22:04:06',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'xampp',
                'content' => '<p>About XAMPP</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2016-02-17 22:04:55',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'terminal',
                'content' => '<p>About Ubuntu Terminal</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2016-04-29 21:24:32',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Yahoo',
                'content' => '<p>Yahoo</p>
',
                'count' => 2,
                'status' => 1,
                'created_at' => '2016-07-26 23:27:34',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'TechCrunch',
                'content' => '<p>TechCrunch</p>
',
                'count' => 1,
                'status' => 1,
                'created_at' => '2016-07-26 23:27:48',
                'updated_at' => '2017-11-01 09:23:06',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Andriod',
                'content' => '<p>Android !</p>',
                'count' => 7,
                'status' => 1,
                'created_at' => '2017-11-01 08:31:45',
                'updated_at' => '2017-11-01 09:23:06',
            ),
        ));
        
        
    }
}