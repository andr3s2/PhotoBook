<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlbumMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('album', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->text('descripcion');
      $table->integer('usuario')->unsigned();
      $table->foreign('usuario')->references('id')->on('usuario')->onDelete('cascade');
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
		Schema::drop('album');
	}

}
