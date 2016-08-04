<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('task')->delete();
        
        \DB::table('task')->insert(array (
            0 => 
            array (
                'id' => '1',
                'task_name' => 'First Activity',
                'task_details' => 'This is the First Activity Posted directly to DB',
                'task_byuser' => '1',
                'task_status' => '1',
                'status' => '0',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
