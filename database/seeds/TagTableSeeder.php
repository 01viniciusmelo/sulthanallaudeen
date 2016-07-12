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
                'id' => '1',
                'tagTitle' => 'php',
                'tagContent' => '<p>PHP is a popular general-purpose weakly-typed server-side scripting plus object oriented programming language that is especially suited for web development.</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-28 23:11:23',
                'updated_at' => '2015-09-28 23:11:23',
            ),
            1 => 
            array (
                'id' => '2',
                'tagTitle' => 'laravel',
                'tagContent' => '<p>Laravel is an open-source PHP web development MVC framework created by Taylor Otwell. Laravel helps you create applications using simple, expressive syntax.</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-28 23:11:53',
                'updated_at' => '2015-09-28 23:11:53',
            ),
            2 => 
            array (
                'id' => '3',
                'tagTitle' => 'Sysaxiom',
                'tagContent' => '<p>Post related to Sysaxiom</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 07:00:21',
                'updated_at' => '2015-09-30 07:00:21',
            ),
            3 => 
            array (
                'id' => '4',
                'tagTitle' => 'jQuery',
                'tagContent' => '<p>About JQuery</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 18:17:30',
                'updated_at' => '2015-09-30 18:17:30',
            ),
            4 => 
            array (
                'id' => '5',
                'tagTitle' => 'Github',
                'tagContent' => '<p>Github</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 18:35:23',
                'updated_at' => '2015-09-30 18:35:23',
            ),
            5 => 
            array (
                'id' => '6',
                'tagTitle' => 'StackoverFlow',
                'tagContent' => '<p>StackoverFlow</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 18:35:30',
                'updated_at' => '2015-09-30 18:35:30',
            ),
            6 => 
            array (
                'id' => '7',
                'tagTitle' => 'Windows',
                'tagContent' => '<p>Windows</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 18:35:36',
                'updated_at' => '2015-09-30 18:35:36',
            ),
            7 => 
            array (
                'id' => '8',
                'tagTitle' => 'Windows',
                'tagContent' => '<p>Windows</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 18:35:36',
                'updated_at' => '2015-09-30 18:35:36',
            ),
            8 => 
            array (
                'id' => '9',
                'tagTitle' => 'Misc',
                'tagContent' => '<p>Misc</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-09-30 18:35:42',
                'updated_at' => '2015-09-30 18:35:42',
            ),
            9 => 
            array (
                'id' => '10',
                'tagTitle' => 'GoogleMaps',
                'tagContent' => '<p>About&nbsp;GoogleMaps</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-10-06 04:16:40',
                'updated_at' => '2015-10-06 04:16:40',
            ),
            10 => 
            array (
                'id' => '11',
                'tagTitle' => 'General Tips',
                'tagContent' => '<p>This tag is about&nbsp;General Tips</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-10-06 04:18:17',
                'updated_at' => '2015-10-06 04:18:17',
            ),
            11 => 
            array (
                'id' => '12',
                'tagTitle' => 'MySQL',
                'tagContent' => '<p>This tag is about&nbsp;MySQL</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-10-06 04:21:36',
                'updated_at' => '2015-10-06 04:21:36',
            ),
            12 => 
            array (
                'id' => '13',
            'tagTitle' => 'MySQL(i)',
            'tagContent' => '<p>This is about&nbsp;MySQL(i)</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-10-06 04:21:48',
                'updated_at' => '2015-10-06 04:21:48',
            ),
            13 => 
            array (
                'id' => '14',
                'tagTitle' => 'Google App Script',
                'tagContent' => '<p>This tag is about&nbsp;Google App Script</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-10-06 04:31:28',
                'updated_at' => '2015-10-06 04:31:28',
            ),
            14 => 
            array (
                'id' => '15',
                'tagTitle' => 'Google ',
                'tagContent' => '<p>About&nbsp;Google</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-10-06 04:33:38',
                'updated_at' => '2015-10-06 04:33:38',
            ),
            15 => 
            array (
                'id' => '16',
                'tagTitle' => 'Heroku',
                'tagContent' => '<p>About Heroku</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-10-06 04:34:40',
                'updated_at' => '2015-10-06 04:34:40',
            ),
            16 => 
            array (
                'id' => '17',
                'tagTitle' => 'Windows Phone',
                'tagContent' => '<p>Windows Phone App Development</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-11-04 03:52:24',
                'updated_at' => '2015-11-04 03:52:24',
            ),
            17 => 
            array (
                'id' => '18',
                'tagTitle' => 'Laravel - Middleware',
                'tagContent' => '<p>Tag about Laravel Middleware -&gt;&nbsp;http://laravel.com/docs/5.1/middleware</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-11-05 18:54:46',
                'updated_at' => '2015-11-05 18:54:46',
            ),
            18 => 
            array (
                'id' => '19',
                'tagTitle' => 'Personal',
                'tagContent' => '<p>Its all about Personal of Sulthan Allaudeen</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2015-11-13 09:07:26',
                'updated_at' => '2015-11-13 09:07:26',
            ),
            19 => 
            array (
                'id' => '20',
                'tagTitle' => 'Ubuntu',
                'tagContent' => '<p>This tag is about Ubuntu</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2016-02-17 15:03:34',
                'updated_at' => '2016-02-17 15:03:34',
            ),
            20 => 
            array (
                'id' => '21',
                'tagTitle' => 'Composer',
                'tagContent' => '<p>This tag is about Composer Package Manager</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2016-02-17 15:04:06',
                'updated_at' => '2016-02-17 15:04:06',
            ),
            21 => 
            array (
                'id' => '22',
                'tagTitle' => 'xampp',
                'tagContent' => '<p>About XAMPP</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2016-02-17 15:04:55',
                'updated_at' => '2016-02-17 15:04:55',
            ),
            22 => 
            array (
                'id' => '23',
                'tagTitle' => 'terminal',
                'tagContent' => '<p>About Ubuntu Terminal</p>
',
                'tagStatus' => '1',
                'status' => '0',
                'created_at' => '2016-04-29 14:24:32',
                'updated_at' => '2016-04-29 14:24:32',
            ),
        ));
        
        
    }
}
