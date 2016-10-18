<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sulthan Allaudeen',
                'password' => '$2y$10$AgwSIFzg/2lI.ywnrgVdkuzjoji.l.HRmW3hZ1sF2Ha2GWOTvyusG',
                'remember_token' => '',
                'email' => 'sa@sulthanallaudeen.com',
                'gcm_id' => 'SAAA',
                'status' => 0,
                'created_at' => '2015-08-29 01:20:47',
                'updated_at' => '2016-04-09 02:08:00',
            ),
        ));
        
        
    }
}
