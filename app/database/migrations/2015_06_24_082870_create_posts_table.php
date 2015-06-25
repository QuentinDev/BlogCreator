<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table){
            $table->increments('id');
            $table->unsignedInteger('id_blog');
            $table->integer('id_user');
            $table->string('title');
            $table->string('content');
            $table->string('filename');
            $table->string('path');
            $table->integer('size');
            $table->string('type');
            $table->timestamps();
        });

        Schema::table('posts', function($table) {
            $table->foreign('id_blog')->references('id')->on('blogs')->onUpdate('cascade')->onDelete('cascade');
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
