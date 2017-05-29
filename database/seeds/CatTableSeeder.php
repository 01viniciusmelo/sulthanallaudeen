<?php

use Illuminate\Database\Seeder;

class CatTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat')->delete();
        
        \DB::table('cat')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cat_title' => 'Urgent',
                'cat_content' => '<p>Its Really Urgent</p>
',
                'cat_status' => 1,
                'status' => 0,
                'created_at' => '2015-11-13 23:11:19',
                'updated_at' => '2015-11-13 23:11:19',
            ),
        ));
        
        
    }
}