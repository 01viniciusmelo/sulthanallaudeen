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
                'created_at' => '2017-11-04 14:12:02',
                'updated_at' => '2017-11-04 14:12:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-05 01:00:03',
                'updated_at' => '2017-11-05 01:00:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-06 01:00:05',
                'updated_at' => '2017-11-06 01:00:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-07 01:00:03',
                'updated_at' => '2017-11-07 01:00:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-08 01:00:09',
                'updated_at' => '2017-11-08 01:00:09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-09 01:00:07',
                'updated_at' => '2017-11-09 01:00:07',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-10 01:00:11',
                'updated_at' => '2017-11-10 01:00:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-11 01:00:27',
                'updated_at' => '2017-11-11 01:00:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-12 01:01:03',
                'updated_at' => '2017-11-12 01:01:03',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-12 01:02:08',
                'updated_at' => '2017-11-12 01:02:08',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-17 12:13:03',
                'updated_at' => '2017-11-17 12:13:03',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-18 01:00:03',
                'updated_at' => '2017-11-18 01:00:03',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-19 01:00:03',
                'updated_at' => '2017-11-19 01:00:03',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-20 01:00:04',
                'updated_at' => '2017-11-20 01:00:04',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-21 01:00:07',
                'updated_at' => '2017-11-21 01:00:07',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-22 02:15:02',
                'updated_at' => '2017-11-22 02:15:02',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-22 12:30:03',
                'updated_at' => '2017-11-22 12:30:03',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-11-23 12:30:03',
                'updated_at' => '2017-11-23 12:30:03',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-01 06:41:03',
                'updated_at' => '2017-12-01 06:41:03',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-01 12:30:02',
                'updated_at' => '2017-12-01 12:30:02',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-02 12:30:04',
                'updated_at' => '2017-12-02 12:30:04',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-03 12:30:03',
                'updated_at' => '2017-12-03 12:30:03',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-04 12:30:06',
                'updated_at' => '2017-12-04 12:30:06',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-05 12:30:03',
                'updated_at' => '2017-12-05 12:30:03',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-06 12:30:04',
                'updated_at' => '2017-12-06 12:30:04',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-07 12:30:03',
                'updated_at' => '2017-12-07 12:30:03',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-08 12:30:03',
                'updated_at' => '2017-12-08 12:30:03',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-09 12:30:02',
                'updated_at' => '2017-12-09 12:30:02',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-10 12:30:03',
                'updated_at' => '2017-12-10 12:30:03',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-11 12:30:03',
                'updated_at' => '2017-12-11 12:30:03',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-12 12:30:03',
                'updated_at' => '2017-12-12 12:30:03',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-13 12:30:03',
                'updated_at' => '2017-12-13 12:30:03',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-14 12:30:02',
                'updated_at' => '2017-12-14 12:30:02',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-15 12:30:04',
                'updated_at' => '2017-12-15 12:30:04',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-16 12:30:10',
                'updated_at' => '2017-12-16 12:30:10',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-17 12:30:11',
                'updated_at' => '2017-12-17 12:30:11',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-18 12:30:12',
                'updated_at' => '2017-12-18 12:30:12',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-19 12:30:12',
                'updated_at' => '2017-12-19 12:30:12',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-20 12:30:12',
                'updated_at' => '2017-12-20 12:30:12',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-21 12:30:13',
                'updated_at' => '2017-12-21 12:30:13',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-22 12:30:13',
                'updated_at' => '2017-12-22 12:30:13',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-23 12:30:14',
                'updated_at' => '2017-12-23 12:30:14',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-24 12:30:10',
                'updated_at' => '2017-12-24 12:30:10',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-25 12:30:11',
                'updated_at' => '2017-12-25 12:30:11',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-26 12:30:18',
                'updated_at' => '2017-12-26 12:30:18',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-27 12:30:14',
                'updated_at' => '2017-12-27 12:30:14',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-28 12:30:16',
                'updated_at' => '2017-12-28 12:30:16',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-29 12:30:17',
                'updated_at' => '2017-12-29 12:30:17',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-30 12:30:13',
                'updated_at' => '2017-12-30 12:30:13',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'cron',
                'desc' => 'Cron job for the day',
                'flag' => NULL,
                'status' => 1,
                'created_at' => '2017-12-31 12:30:13',
                'updated_at' => '2017-12-31 12:30:13',
            ),
        ));
        
        
    }
}