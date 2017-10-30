<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		#Blog
		Schema::create('blog',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('title', 200);
            $table->string('url', 500);
            $table->longText('content');
            $table->dateTime('date');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
		#Blog Tag
		Schema::create('blog_tag',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('blog_id');
            $table->integer('tag_id');
            $table->integer('user_id');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
		#Contact Mail
		Schema::create('mail',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('email', 500);
            $table->string('message', 500);
            $table->integer('read');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
		#Tag
		Schema::create('tag',function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('title', 100);
            $table->longText('content');
            $table->integer('count');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
		#User
        Schema::create('users', function (Blueprint $table) {
			$table->engine = "InnoDB";
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
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
		Schema::dropIfExists('blog');
		Schema::dropIfExists('blog_tag');
		Schema::dropIfExists('mail');
		Schema::dropIfExists('tag');
		Schema::dropIfExists('users');
    }
}
