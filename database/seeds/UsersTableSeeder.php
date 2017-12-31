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
                'remember_token' => 'GVBU3P0Oioep5LVqhdcM2orO8VsMOLf1IQ719ArMTyyAG0qS1pKZytyWf0Ft',
                'created_at' => '2017-09-13 03:50:14',
                'updated_at' => '2017-09-13 03:50:14',
            ),
        ));
        
        
    }
}