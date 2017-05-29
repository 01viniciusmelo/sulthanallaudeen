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
                'tag_title' => 'php',
                'tag_content' => '<p>PHP is a popular general-purpose weakly-typed server-side scripting plus object oriented programming language that is especially suited for web development.</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-28 23:11:23',
                'updated_at' => '2015-09-28 23:11:23',
            ),
            1 => 
            array (
                'id' => 2,
                'tag_title' => 'laravel',
                'tag_content' => '<p>Laravel is an open-source PHP web development MVC framework created by Taylor Otwell. Laravel helps you create applications using simple, expressive syntax.</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-28 23:11:53',
                'updated_at' => '2015-09-28 23:11:53',
            ),
            2 => 
            array (
                'id' => 3,
                'tag_title' => 'Sysaxiom',
                'tag_content' => '<p>Post related to Sysaxiom</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 07:00:21',
                'updated_at' => '2015-09-30 07:00:21',
            ),
            3 => 
            array (
                'id' => 4,
                'tag_title' => 'jQuery',
                'tag_content' => '<p>About JQuery</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 18:17:30',
                'updated_at' => '2015-09-30 18:17:30',
            ),
            4 => 
            array (
                'id' => 5,
                'tag_title' => 'Github',
                'tag_content' => '<p>Github</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 18:35:23',
                'updated_at' => '2015-09-30 18:35:23',
            ),
            5 => 
            array (
                'id' => 6,
                'tag_title' => 'StackoverFlow',
                'tag_content' => '<p>StackoverFlow</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 18:35:30',
                'updated_at' => '2015-09-30 18:35:30',
            ),
            6 => 
            array (
                'id' => 7,
                'tag_title' => 'Windows',
                'tag_content' => '<p>Windows</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 18:35:36',
                'updated_at' => '2015-09-30 18:35:36',
            ),
            7 => 
            array (
                'id' => 8,
                'tag_title' => 'Windows',
                'tag_content' => '<p>Windows</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 18:35:36',
                'updated_at' => '2015-09-30 18:35:36',
            ),
            8 => 
            array (
                'id' => 9,
                'tag_title' => 'Misc',
                'tag_content' => '<p>Misc</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 18:35:42',
                'updated_at' => '2015-09-30 18:35:42',
            ),
            9 => 
            array (
                'id' => 10,
                'tag_title' => 'GoogleMaps',
                'tag_content' => '<p>About&nbsp;GoogleMaps</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-10-06 04:16:40',
                'updated_at' => '2015-10-06 04:16:40',
            ),
            10 => 
            array (
                'id' => 11,
                'tag_title' => 'General Tips',
                'tag_content' => '<p>This tag is about&nbsp;General Tips</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-10-06 04:18:17',
                'updated_at' => '2015-10-06 04:18:17',
            ),
            11 => 
            array (
                'id' => 12,
                'tag_title' => 'MySQL',
                'tag_content' => '<p>This tag is about&nbsp;MySQL</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-10-06 04:21:36',
                'updated_at' => '2015-10-06 04:21:36',
            ),
            12 => 
            array (
                'id' => 13,
            'tag_title' => 'MySQL(i)',
            'tag_content' => '<p>This is about&nbsp;MySQL(i)</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-10-06 04:21:48',
                'updated_at' => '2015-10-06 04:21:48',
            ),
            13 => 
            array (
                'id' => 14,
                'tag_title' => 'Google App Script',
                'tag_content' => '<p>This tag is about&nbsp;Google App Script</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-10-06 04:31:28',
                'updated_at' => '2015-10-06 04:31:28',
            ),
            14 => 
            array (
                'id' => 15,
                'tag_title' => 'Google ',
                'tag_content' => '<p>About&nbsp;Google</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-10-06 04:33:38',
                'updated_at' => '2015-10-06 04:33:38',
            ),
            15 => 
            array (
                'id' => 16,
                'tag_title' => 'Heroku',
                'tag_content' => '<p>About Heroku</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-10-06 04:34:40',
                'updated_at' => '2015-10-06 04:34:40',
            ),
            16 => 
            array (
                'id' => 17,
                'tag_title' => 'Windows Phone',
                'tag_content' => '<p>Windows Phone App Development</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-11-04 03:52:24',
                'updated_at' => '2015-11-04 03:52:24',
            ),
            17 => 
            array (
                'id' => 18,
                'tag_title' => 'Laravel - Middleware',
                'tag_content' => '<p>Tag about Laravel Middleware -&gt;&nbsp;http://laravel.com/docs/5.1/middleware</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 18:54:46',
                'updated_at' => '2015-11-05 18:54:46',
            ),
            18 => 
            array (
                'id' => 19,
                'tag_title' => 'Personal',
                'tag_content' => '<p>Its all about Personal of Sulthan Allaudeen</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2015-11-13 09:07:26',
                'updated_at' => '2015-11-13 09:07:26',
            ),
            19 => 
            array (
                'id' => 20,
                'tag_title' => 'Ubuntu',
                'tag_content' => '<p>This tag is about Ubuntu</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 15:03:34',
                'updated_at' => '2016-02-17 15:03:34',
            ),
            20 => 
            array (
                'id' => 21,
                'tag_title' => 'Composer',
                'tag_content' => '<p>This tag is about Composer Package Manager</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 15:04:06',
                'updated_at' => '2016-02-17 15:04:06',
            ),
            21 => 
            array (
                'id' => 22,
                'tag_title' => 'xampp',
                'tag_content' => '<p>About XAMPP</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 15:04:55',
                'updated_at' => '2016-02-17 15:04:55',
            ),
            22 => 
            array (
                'id' => 23,
                'tag_title' => 'terminal',
                'tag_content' => '<p>About Ubuntu Terminal</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2016-04-29 14:24:32',
                'updated_at' => '2016-04-29 14:24:32',
            ),
            23 => 
            array (
                'id' => 24,
                'tag_title' => 'Yahoo',
                'tag_content' => '<p>Yahoo</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2016-07-26 16:27:34',
                'updated_at' => '2016-07-26 16:27:34',
            ),
            24 => 
            array (
                'id' => 25,
                'tag_title' => 'TechCrunch',
                'tag_content' => '<p>TechCrunch</p>
',
                'tag_status' => 1,
                'status' => 0,
                'created_at' => '2016-07-26 16:27:48',
                'updated_at' => '2016-07-26 16:27:48',
            ),
        ));
        
        
    }
}