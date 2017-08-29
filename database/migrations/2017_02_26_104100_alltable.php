<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alltable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('name', 50);
            $table->string('password', 110);
            $table->string('remember_token', 110);
            $table->string('email', 110);
            $table->string('gcm_id', 110);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        Schema::create('user_log',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('user_id', 110);
            $table->string('ip', 110);
            $table->string('platform', 110);
            $table->string('browser', 110);
            $table->string('version', 110);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

        });

        Schema::create('blog',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('blog_title', 200);
            $table->string('blog_url', 500);
            $table->longText('blog_content');
            $table->integer('blog_author');
            $table->dateTime('blog_date');
            $table->integer('blog_status');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

       

        Schema::create('blog_tag',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('blog_id');
            $table->integer('tag_id');
            $table->integer('user_id');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        
        Schema::create('cat',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('cat_title', 100);
            $table->longText('cat_content');
            $table->tinyInteger('cat_status')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        Schema::create('config',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('mobile', 255);
            $table->string('email', 255);
            $table->string('github', 255);
            $table->string('stackoverflow', 255);
            $table->string('twitter', 255);
            $table->string('facebook', 255);
            $table->string('skype', 255);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        Schema::create('contactmail',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('user_email', 500);
            $table->string('user_message', 500);
            $table->integer('message_status');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });


        Schema::create('cron_entry',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('process_id');
            $table->tinyInteger('type')->default(0);
            $table->date('cron_date');
            $table->time('cron_time');
            $table->string('cron_note', 255);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        Schema::create('mailtemplate',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('subject', 500);
            $table->longText('content');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });
        
        
        Schema::create('tag',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('tag_title', 100);
            $table->longText('tag_content');
            $table->integer('tag_status');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
