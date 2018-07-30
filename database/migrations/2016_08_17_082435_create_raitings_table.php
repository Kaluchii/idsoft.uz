<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaitingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('raitings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ip');
			$table->string('entity_name');
			$table->integer('entity_id');
			$table->integer('value');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('raitings');
	}

}
