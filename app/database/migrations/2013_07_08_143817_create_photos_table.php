<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('imageable_id');
			$table->string('imageable_type',50);
			$table->string('imageable_position',50);
			$table->smallInteger('imageable_order');
			$table->string('filename');
			$table->string('original');
			$table->string('mime',50);
			$table->integer('size');
			$table->smallInteger('width');
			$table->smallInteger('height');
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
		Schema::drop('photos');
	}

}
