<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table){
            $table->increments('id');
            $table->unsignedInteger('id_post');
            $table->integer('id_user');
            $table->string('username');
            $table->string('content');
            $table->timestamps();
        });

        Schema::table('comments', function($table) {
            $table->foreign('id_post')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
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
