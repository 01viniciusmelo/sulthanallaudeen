<?php

use Illuminate\Database\Seeder;

class TaskStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('task_status')->delete();
        
        
        
    }
}