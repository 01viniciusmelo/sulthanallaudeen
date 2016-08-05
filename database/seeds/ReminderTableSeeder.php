<?php

use Illuminate\Database\Seeder;

class ReminderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('reminder')->delete();
        
        \DB::table('reminder')->insert(array (
            0 => 
            array (
                'id' => '1',
                'reminder_type' => '1',
                'reminder_name' => 'Jogging',
				'reminder_date' => '2015-08-29',
                'reminder_time' => '06:00:00',
                'reminder_note' => 'Go for Jogging',
                'status' => '1',
                'created_at' => '2015-08-29 01:20:47',
                'updated_at' => '2016-04-09 02:08:00',
            ),
            1 => 
            array (
                'id' => '2',
                'reminder_type' => '2',
                'reminder_name' => 'Order Water',
				'reminder_date' => '2015-08-29',
                'reminder_time' => '08:00:00',
                'reminder_note' => 'Order Water for Room',
                'status' => '1',
                'created_at' => '2015-08-29 01:20:47',
                'updated_at' => '2016-04-09 02:08:00',
            ),
        ));

    }
}
