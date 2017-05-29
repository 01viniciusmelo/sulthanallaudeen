<?php

use Illuminate\Database\Seeder;

class CronEntryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cron_entry')->delete();
        
        \DB::table('cron_entry')->insert(array (
            0 => 
            array (
                'id' => 1,
                'process_id' => 2,
                'type' => 0,
                'cron_date' => '2016-10-18',
                'cron_time' => '08:01:38',
                'cron_note' => 'Cron Job Executed Succesfully',
                'status' => 1,
                'created_at' => '2016-10-18 08:01:38',
                'updated_at' => '2016-10-18 08:01:38',
            ),
        ));
        
        
    }
}