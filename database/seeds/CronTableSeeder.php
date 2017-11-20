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
                'created_at' => '2017-11-04 01:42:02',
                'updated_at' => '2017-11-04 01:42:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-04 12:30:03',
                'updated_at' => '2017-11-04 12:30:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-05 12:30:05',
                'updated_at' => '2017-11-05 12:30:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-06 12:30:03',
                'updated_at' => '2017-11-06 12:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-07 12:30:09',
                'updated_at' => '2017-11-07 12:30:09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-08 12:30:07',
                'updated_at' => '2017-11-08 12:30:07',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-09 12:30:11',
                'updated_at' => '2017-11-09 12:30:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-10 12:30:27',
                'updated_at' => '2017-11-10 12:30:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-11 12:31:03',
                'updated_at' => '2017-11-11 12:31:03',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-11 12:32:08',
                'updated_at' => '2017-11-11 12:32:08',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-16 23:43:03',
                'updated_at' => '2017-11-16 23:43:03',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-17 12:30:03',
                'updated_at' => '2017-11-17 12:30:03',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-18 12:30:03',
                'updated_at' => '2017-11-18 12:30:03',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-19 12:30:04',
                'updated_at' => '2017-11-19 12:30:04',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-20 12:30:07',
                'updated_at' => '2017-11-20 12:30:07',
            ),
        ));
        
        
    }
}