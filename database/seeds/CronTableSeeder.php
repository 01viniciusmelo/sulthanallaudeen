<?php

use Illuminate\Database\Seeder;

class CronTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cron')->delete();
        
        \DB::table('cron')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-03 20:12:02',
                'updated_at' => '2017-11-03 20:12:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-04 07:00:03',
                'updated_at' => '2017-11-04 07:00:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-05 07:00:05',
                'updated_at' => '2017-11-05 07:00:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-06 07:00:03',
                'updated_at' => '2017-11-06 07:00:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-07 07:00:09',
                'updated_at' => '2017-11-07 07:00:09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-08 07:00:07',
                'updated_at' => '2017-11-08 07:00:07',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-09 07:00:11',
                'updated_at' => '2017-11-09 07:00:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-10 07:00:27',
                'updated_at' => '2017-11-10 07:00:27',
            ),
        ));
        
        
    }
}