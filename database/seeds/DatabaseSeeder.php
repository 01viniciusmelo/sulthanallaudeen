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
        $this->call(BlogTableSeeder::class);
        $this->call(BlogTagTableSeeder::class);
        $this->call(MailSeeder::class);
        $this->call(MailTemplateTableSeeder::class);
        $this->call(TagTableSeeder::class);
    }
}
