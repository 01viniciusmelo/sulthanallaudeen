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
                'email' => 'sa@sulthanallaudeen.com',
                'password' => '$2y$10$IGf5IQYECcXasTyehDgv4ONh4Rap16RX/amsYHK/w.DZcKwYaP6C6',
                'remember_token' => 'oy1EVOOw8MXXqAENSPf5D3WHu5YNsVSisoSJa9zaigcXhVCLHwZlFzwKD7UY',
                'created_at' => '2017-09-12 15:20:14',
                'updated_at' => '2017-09-12 15:20:14',
            ),
        ));
        
        
    }
}