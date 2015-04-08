<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration to create the "results" table
 *
 * @package Database
 */
class CreateResultsTable extends Migration {

	/**
	 * Run the migrations.
	 * Creates the table "results" with columns id, value
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Results table
		Schema::create('results', function($table) {
			$table->engine = "InnoDB";
			$table->increments('id', true);
			$table->string('value', 250000);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * Drops table "results"
	 *
	 * @return void
	 */
	public function down()
	{
		//Drop Results table
		Schema::dropIfExists('results');
	}

}
