<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elements', function (Blueprint $table) {
			$table->increments('id');
			$table->text('body');
			$table->integer('sector_id')->unsigned();
			$table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
			$table->integer('functie_id')->unsigned();
			$table->foreign('functie_id')->references('id')->on('functies')->onDelete('cascade');
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
		Schema::dropIfExists('elements');
	}
}
