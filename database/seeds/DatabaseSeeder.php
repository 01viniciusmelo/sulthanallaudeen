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
        // $this->call(UsersTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(BlogTagTableSeeder::class);
        $this->call(CatTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(ContactmailTableSeeder::class);
        $this->call(CronEntryTableSeeder::class);
        $this->call(MailtemplateTableSeeder::class);
        $this->call(ReminderTableSeeder::class);
        $this->call(SmsLogTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(TaskTableSeeder::class);
        $this->call(TaskCatTableSeeder::class);
        $this->call(TaskStatusTableSeeder::class);
        $this->call(UserLogTableSeeder::class);
    }
}
