<?php

use Illuminate\Database\Seeder;

class BotTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bot')->delete();
        
        \DB::table('bot')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Chitti',
                'description' => 'Details about Chitti',
                'dob' => '2017-07-30 08:25:16',
                'status' => 1,
                'created_at' => '2017-07-30 08:25:16',
                'updated_at' => '2017-07-30 08:25:16',
            ),
        ));
        
        
    }
}
