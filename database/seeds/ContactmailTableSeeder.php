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
                'userEmail' => 'ram@ramji.com',
                'userMessage' => 'insi is ',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2015-10-08 05:46:14',
                'updated_at' => '2016-04-19 11:23:53',
            ),
            1 => 
            array (
                'id' => '2',
                'userEmail' => 'vis@visa.com',
                'userMessage' => 'via contact',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2015-10-09 14:05:35',
                'updated_at' => '2016-04-09 01:45:17',
            ),
            2 => 
            array (
                'id' => '3',
                'userEmail' => 'logs@sysaxiom.com',
                'userMessage' => 'Random Check Message',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2015-11-02 20:41:22',
                'updated_at' => '2016-04-09 01:45:01',
            ),
            3 => 
            array (
                'id' => '4',
                'userEmail' => 'test@tester.com',
                'userMessage' => 'Hey, this is last time ',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2015-12-31 01:01:58',
                'updated_at' => '2015-12-31 01:01:58',
            ),
            4 => 
            array (
                'id' => '5',
                'userEmail' => 'me@amandhanda.com',
                'userMessage' => 'Hi Sulthan, I have got your contact from freelancer.com. This is regarding the project you have submitted on freelancer. "PSD to Website conversion". I can do this work. Please go through my works on my website www.amandhanda.com. Please let me know if you have any query. Thanks.',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-01-30 19:08:56',
                'updated_at' => '2016-01-30 19:08:56',
            ),
            5 => 
            array (
                'id' => '6',
                'userEmail' => 'sa@sysaxiom.com',
                'userMessage' => 'allaudeen',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:41:07',
                'updated_at' => '2016-04-08 18:41:07',
            ),
            6 => 
            array (
                'id' => '7',
                'userEmail' => 'a@a.com',
                'userMessage' => 'indian',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:45:43',
                'updated_at' => '2016-04-08 18:45:43',
            ),
            7 => 
            array (
                'id' => '8',
                'userEmail' => 'a@a.com',
                'userMessage' => 'indian',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:45:50',
                'updated_at' => '2016-04-08 18:45:50',
            ),
            8 => 
            array (
                'id' => '9',
                'userEmail' => 'a@a.com',
                'userMessage' => 'indian',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 18:46:32',
                'updated_at' => '2016-04-08 18:46:32',
            ),
            9 => 
            array (
                'id' => '10',
                'userEmail' => 'a@a.com',
                'userMessage' => 'indian',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 19:11:58',
                'updated_at' => '2016-04-08 19:11:58',
            ),
            10 => 
            array (
                'id' => '11',
                'userEmail' => 'allaudeen.s@gmail.com',
                'userMessage' => 'Here is the Msg',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 19:12:57',
                'updated_at' => '2016-04-08 19:12:57',
            ),
            11 => 
            array (
                'id' => '12',
                'userEmail' => 'shankar@gmail.com',
                'userMessage' => 'This new look was great !',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-08 19:39:40',
                'updated_at' => '2016-04-08 19:39:40',
            ),
            12 => 
            array (
                'id' => '13',
                'userEmail' => 'ravin.1221@gmail.com',
                'userMessage' => 'online random Check',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-19 09:14:27',
                'updated_at' => '2016-04-19 09:14:27',
            ),
            13 => 
            array (
                'id' => '14',
                'userEmail' => 'Ios@ios.com',
                'userMessage' => 'iOS test',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-21 14:47:17',
                'updated_at' => '2016-04-21 14:47:17',
            ),
            14 => 
            array (
                'id' => '15',
                'userEmail' => 'allaudeen.s@gmail.com',
                'userMessage' => 'Mobile check at SL',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-28 13:18:07',
                'updated_at' => '2016-04-28 13:18:07',
            ),
            15 => 
            array (
                'id' => '16',
                'userEmail' => 'allaudeen.s@gmail.com',
                'userMessage' => 'Mobile check at SL',
                'messageStatus' => '0',
                'status' => '0',
                'created_at' => '2016-04-28 13:18:07',
                'updated_at' => '2016-04-28 13:18:07',
            ),
        ));
        
        
    }
}
