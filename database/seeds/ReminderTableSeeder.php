<?php

use Illuminate\Database\Seeder;

class ReminderTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reminder')->delete();
        
        \DB::table('reminder')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Daily Alarm',
                'message' => 'Morning Call',
                'type' => 2,
                'status' => 1,
                'date' => '2017-11-21 06:30:00',
                'created_at' => '2017-11-21 13:24:24',
                'updated_at' => '2017-11-21 13:24:24',
            ),
        ));
        
        
    }
}