<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('config')->delete();
        
        \DB::table('config')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mobile' => '9042445010',
                'email' => 'sa@sulthanallaudeen.com',
                'github' => 'https://github.com/sulthanallaudeen',
                'stackoverflow' => 'stackoverflow.com/users/3282633',
                'twitter' => 'https://twitter.com/allaudeens',
                'facebook' => 'http://facebook.com/allaudeen.s',
                'skype' => 'allaudeen.s',
                'status' => 0,
                'created_at' => '2016-04-08 15:30:00',
                'updated_at' => '2016-04-09 17:43:52',
            ),
        ));
        
        
    }
}