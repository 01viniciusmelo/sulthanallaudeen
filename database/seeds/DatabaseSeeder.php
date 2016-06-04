<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call('UsersTableSeeder');
        $this->call('BlogTableSeeder');
        $this->call('BlogTagTableSeeder');
        $this->call('CatTableSeeder');
        $this->call('ConfigTableSeeder');
        $this->call('ContactmailTableSeeder');
        $this->call('MailtemplateTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('TaskTableSeeder');
        $this->call('TaskCatTableSeeder');
        $this->call('TaskStatusTableSeeder');
        $this->call('UserLogTableSeeder');
    }
}
