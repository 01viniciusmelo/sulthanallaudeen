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
                'id' => '1',
                'catTitle' => 'Urgent',
                'catContent' => '<p>Its Really Urgent</p>
',
                'catStatus' => '1',
                'status' => '0',
                'created_at' => '2015-11-13 23:11:19',
                'updated_at' => '2015-11-13 23:11:19',
            ),
        ));
        
        
    }
}
