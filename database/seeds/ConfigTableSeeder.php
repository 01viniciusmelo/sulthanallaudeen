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
                'name' => 'firebase-server-key',
                'desc' => 'AAAADgkZ9Cc:APA91bHzJTedM77-RtZlpbT77U6frrU_MZa5P9s0i0ZhKk1hGQBxQhEd_oNh4lEj3IzXtXS8HeEZU8Gk3EHDjdLTkhrDwRoJKDyAJX9-ckqzZnUl6MW6g40IuxDLUd-ITl7yjyJAhdvp',
                'status' => 1,
                'created_at' => '2017-11-21 01:38:45',
                'updated_at' => '2017-11-21 01:38:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'android-device-token',
                'desc' => 'cMlvyeQu76E:APA91bGbKRn4ChFYh_OU7KLqTpHK2kbfA8fMCartLr7_NvDj550lFL32B5dSFRqgLRXm5FAzcoYx9uSln2ZSMntauTW6wd3Ek-BsXeaHxQIStJ7aZLCbVXCkj2qiI-v97z9vYGG6yTK8',
                'status' => 1,
                'created_at' => '2017-11-21 01:39:11',
                'updated_at' => '2017-12-01 06:41:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'plivo',
                'desc' => 'MANZA1OTU4ODVLYWFINW|||ZDgwMGVmZjJjYzg2NTljOGJhZTE3M2E1ZDRlMTQ4',
                'status' => 1,
                'created_at' => '2017-12-20 05:46:16',
                'updated_at' => '2017-12-20 05:46:16',
            ),
        ));
        
        
    }
}