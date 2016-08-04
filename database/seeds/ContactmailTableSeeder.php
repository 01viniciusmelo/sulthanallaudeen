<?php

use Illuminate\Database\Seeder;

class ContactmailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contactmail')->delete();
        
        \DB::table('contactmail')->insert(array (
            0 => 
            array (
                'id' => '1',
                'user_email' => 'ram@ramji.com',
                'user_message' => 'insi is ',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2015-10-08 05:46:14',
                'updated_at' => '2016-04-19 11:23:53',
            ),
            1 => 
            array (
                'id' => '2',
                'user_email' => 'vis@visa.com',
                'user_message' => 'via contact',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2015-10-09 14:05:35',
                'updated_at' => '2016-04-09 01:45:17',
            ),
            2 => 
            array (
                'id' => '3',
                'user_email' => 'logs@sysaxiom.com',
                'user_message' => 'Random Check Message',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2015-11-02 20:41:22',
                'updated_at' => '2016-04-09 01:45:01',
            ),
            3 => 
            array (
                'id' => '4',
                'user_email' => 'test@tester.com',
                'user_message' => 'Hey, this is last time ',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2015-12-31 01:01:58',
                'updated_at' => '2015-12-31 01:01:58',
            ),
            4 => 
            array (
                'id' => '5',
                'user_email' => 'me@amandhanda.com',
                'user_message' => 'Hi Sulthan, I have got your contact from freelancer.com. This is regarding the project you have submitted on freelancer. "PSD to Website conversion". I can do this work. Please go through my works on my website www.amandhanda.com. Please let me know if you have any query. Thanks.',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-01-30 19:08:56',
                'updated_at' => '2016-01-30 19:08:56',
            ),
            5 => 
            array (
                'id' => '6',
                'user_email' => 'sa@sysaxiom.com',
                'user_message' => 'allaudeen',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:41:07',
                'updated_at' => '2016-04-08 18:41:07',
            ),
            6 => 
            array (
                'id' => '7',
                'user_email' => 'a@a.com',
                'user_message' => 'indian',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:45:43',
                'updated_at' => '2016-04-08 18:45:43',
            ),
            7 => 
            array (
                'id' => '8',
                'user_email' => 'a@a.com',
                'user_message' => 'indian',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:45:50',
                'updated_at' => '2016-04-08 18:45:50',
            ),
            8 => 
            array (
                'id' => '9',
                'user_email' => 'a@a.com',
                'user_message' => 'indian',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:46:32',
                'updated_at' => '2016-04-08 18:46:32',
            ),
            9 => 
            array (
                'id' => '10',
                'user_email' => 'a@a.com',
                'user_message' => 'indian',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 19:11:58',
                'updated_at' => '2016-04-08 19:11:58',
            ),
            10 => 
            array (
                'id' => '11',
                'user_email' => 'allaudeen.s@gmail.com',
                'user_message' => 'Here is the Msg',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 19:12:57',
                'updated_at' => '2016-04-08 19:12:57',
            ),
            11 => 
            array (
                'id' => '12',
                'user_email' => 'shankar@gmail.com',
                'user_message' => 'This new look was great !',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 19:39:40',
                'updated_at' => '2016-04-08 19:39:40',
            ),
            12 => 
            array (
                'id' => '13',
                'user_email' => 'ravin.1221@gmail.com',
                'user_message' => 'online random Check',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-19 09:14:27',
                'updated_at' => '2016-04-19 09:14:27',
            ),
            13 => 
            array (
                'id' => '14',
                'user_email' => 'Ios@ios.com',
                'user_message' => 'iOS test',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-21 14:47:17',
                'updated_at' => '2016-04-21 14:47:17',
            ),
            14 => 
            array (
                'id' => '15',
                'user_email' => 'allaudeen.s@gmail.com',
                'user_message' => 'Mobile check at SL',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-28 13:18:07',
                'updated_at' => '2016-04-28 13:18:07',
            ),
            15 => 
            array (
                'id' => '16',
                'user_email' => 'allaudeen.s@gmail.com',
                'user_message' => 'Mobile check at SL',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-04-28 13:18:07',
                'updated_at' => '2016-04-28 13:18:07',
            ),
            16 => 
            array (
                'id' => '17',
                'user_email' => 'test@tet.com',
                'user_message' => 'heloo, how r u 
',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-08-03 15:11:46',
                'updated_at' => '2016-08-03 15:11:46',
            ),
            17 => 
            array (
                'id' => '18',
                'user_email' => 'test@t.com',
                'user_message' => 'test',
                'message_status' => '0',
                'status' => '0',
                'created_at' => '2016-08-03 15:12:04',
                'updated_at' => '2016-08-03 15:12:04',
            ),
        ));
        
        
    }
}
