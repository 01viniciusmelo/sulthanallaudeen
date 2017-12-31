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
                'id' => 4,
                'title' => 'Daily',
                'message' => 'Test t',
                'type' => 2,
                'status' => 1,
                'date' => '2017-11-23 18:15:00',
                'created_at' => '2017-11-24 04:23:19',
                'updated_at' => '2017-12-29 12:30:17',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'Drink Water',
                'message' => 'Time to drink water',
                'type' => 2,
                'status' => 1,
                'date' => '2017-12-01 15:36:00',
                'created_at' => '2017-11-24 04:24:47',
                'updated_at' => '2017-12-29 12:30:17',
            ),
        ));
        
        
    }
}