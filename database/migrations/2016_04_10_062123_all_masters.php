<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllMasters extends Migration
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
            $table->string('blogTitle', 200);
            $table->string('blogUrl', 500);
            $table->longText('blogContent');
            $table->integer('blogAuthor');
            $table->dateTime('blogDate');
            $table->integer('blogStatus');
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
            $table->string('catTitle', 100);
            $table->longText('catContent');
            $table->tinyInteger('catStatus')->default(0);
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
            $table->string('userEmail', 500);
            $table->string('userMessage', 500);
            $table->integer('messageStatus');
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
            $table->string('tagTitle', 100);
            $table->longText('tagContent');
            $table->integer('tagStatus');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        Schema::create('task',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('task_name', 500);
            $table->longText('task_details');
            $table->integer('task_byuser');
            $table->integer('task_status');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        Schema::create('task_cat',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('task_id');
            $table->integer('cat_id');
            $table->integer('user_id');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

        });

        Schema::create('task_status',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('status_name');
            $table->string('status_percent', 10);
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
