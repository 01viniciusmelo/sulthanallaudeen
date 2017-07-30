<?php

use Illuminate\Database\Seeder;

class SmsLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sms_log')->delete();
        
        \DB::table('sms_log')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '1',
                'number' => '1',
                'content' => '1',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
