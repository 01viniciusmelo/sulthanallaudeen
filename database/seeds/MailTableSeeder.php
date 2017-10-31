<?php

use Illuminate\Database\Seeder;

class MailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mail')->delete();
        
        \DB::table('mail')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'a@a.com',
                'message' => 'hey',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 06:09:11',
                'updated_at' => '2017-09-03 06:09:11',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'a@a.com',
                'message' => 'hey',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 06:09:17',
                'updated_at' => '2017-09-03 06:09:17',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'a@a.com',
                'message' => 'yey',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 07:55:12',
                'updated_at' => '2017-09-03 07:55:12',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'a@a.com',
                'message' => 'indian',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 08:06:53',
                'updated_at' => '2017-09-03 08:06:53',
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'a@a.ccc',
                'message' => 'bdsfasdfds',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 08:08:04',
                'updated_at' => '2017-09-03 08:08:04',
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'admin@7atara.com',
                'message' => 'asdffs',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 08:08:29',
                'updated_at' => '2017-09-03 08:08:29',
            ),
            6 => 
            array (
                'id' => 7,
                'email' => 'admin@7atara.com',
                'message' => 'asdf',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 08:09:06',
                'updated_at' => '2017-09-03 08:09:06',
            ),
            7 => 
            array (
                'id' => 8,
                'email' => 'afasd@a.cm',
                'message' => 'hey',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 08:09:28',
                'updated_at' => '2017-09-03 08:09:28',
            ),
            8 => 
            array (
                'id' => 9,
                'email' => 'a@a.com',
                'message' => 'hey',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 09:55:44',
                'updated_at' => '2017-09-03 09:55:44',
            ),
            9 => 
            array (
                'id' => 10,
                'email' => 'a@a.com',
                'message' => 'heyy',
                'read' => 0,
                'status' => 0,
                'created_at' => '2017-09-03 14:41:42',
                'updated_at' => '2017-09-03 14:41:42',
            ),
            10 => 
            array (
                'id' => 11,
                'email' => 'a@a.com',
                'message' => 'heyy',
                'read' => 8,
                'status' => 0,
                'created_at' => '2017-09-11 07:34:02',
                'updated_at' => '2017-09-11 07:34:02',
            ),
            11 => 
            array (
                'id' => 12,
                'email' => 'alpha@user.com',
                'message' => 'Test Msg',
                'read' => 8,
                'status' => 0,
                'created_at' => '2017-09-12 00:32:45',
                'updated_at' => '2017-09-12 00:32:45',
            ),
            12 => 
            array (
                'id' => 13,
                'email' => 'test@test.com',
                'message' => 'heyy !',
                'read' => 8,
                'status' => 0,
                'created_at' => '2017-10-05 20:11:31',
                'updated_at' => '2017-10-05 20:11:31',
            ),
        ));
        
        
    }
}