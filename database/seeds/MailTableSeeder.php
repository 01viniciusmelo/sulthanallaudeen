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
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 18:39:11',
                'updated_at' => '2017-11-20 21:30:02',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'a@a.com',
                'message' => 'hey',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 18:39:17',
                'updated_at' => '2017-11-20 21:30:02',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'a@a.com',
                'message' => 'yey',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 20:25:12',
                'updated_at' => '2017-11-20 21:30:03',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'a@a.com',
                'message' => 'indian',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 20:36:53',
                'updated_at' => '2017-11-20 21:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'a@a.ccc',
                'message' => 'bdsfasdfds',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 20:38:04',
                'updated_at' => '2017-11-20 21:30:03',
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'admin@7atara.com',
                'message' => 'asdffs',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 20:38:29',
                'updated_at' => '2017-11-20 21:30:04',
            ),
            6 => 
            array (
                'id' => 7,
                'email' => 'admin@7atara.com',
                'message' => 'asdf',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 20:39:06',
                'updated_at' => '2017-11-20 21:30:04',
            ),
            7 => 
            array (
                'id' => 8,
                'email' => 'afasd@a.cm',
                'message' => 'hey',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 20:39:28',
                'updated_at' => '2017-11-20 21:30:04',
            ),
            8 => 
            array (
                'id' => 9,
                'email' => 'a@a.com',
                'message' => 'hey',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-03 22:25:44',
                'updated_at' => '2017-11-20 21:30:05',
            ),
            9 => 
            array (
                'id' => 10,
                'email' => 'a@a.com',
                'message' => 'heyy',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-04 03:11:42',
                'updated_at' => '2017-11-20 21:30:05',
            ),
            10 => 
            array (
                'id' => 11,
                'email' => 'a@a.com',
                'message' => 'heyy',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-11 20:04:02',
                'updated_at' => '2017-11-20 21:39:01',
            ),
            11 => 
            array (
                'id' => 12,
                'email' => 'alpha@user.com',
                'message' => 'Test Msg',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-09-12 13:02:45',
                'updated_at' => '2017-11-20 21:39:03',
            ),
            12 => 
            array (
                'id' => 13,
                'email' => 'test@test.com',
                'message' => 'heyy !',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-10-06 08:41:31',
                'updated_at' => '2017-11-20 21:39:03',
            ),
            13 => 
            array (
                'id' => 14,
                'email' => 'alpha@test.com',
                'message' => 'FCM',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-11-20 13:15:58',
                'updated_at' => '2017-11-20 13:18:22',
            ),
            14 => 
            array (
                'id' => 15,
                'email' => 'a@a.cm',
                'message' => 'Super FCM',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-11-20 13:17:09',
                'updated_at' => '2017-11-20 13:18:30',
            ),
            15 => 
            array (
                'id' => 16,
                'email' => 'Super@sup.cm',
                'message' => 'Hey FCM',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-11-20 13:18:01',
                'updated_at' => '2017-11-20 13:19:09',
            ),
            16 => 
            array (
                'id' => 17,
                'email' => 'Sup@sup.com',
                'message' => 'H FCM',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-11-20 13:19:06',
                'updated_at' => '2017-11-20 13:19:10',
            ),
            17 => 
            array (
                'id' => 18,
                'email' => 'hey@h.cm',
                'message' => 'hey sup',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-11-20 13:19:33',
                'updated_at' => '2017-11-20 13:19:39',
            ),
            18 => 
            array (
                'id' => 19,
                'email' => 'h@h.com',
                'message' => 'Hlo fcm',
                'read' => 1,
                'status' => 0,
                'created_at' => '2017-11-20 13:20:43',
                'updated_at' => '2017-11-20 13:20:46',
            ),
        ));
        
        
    }
}