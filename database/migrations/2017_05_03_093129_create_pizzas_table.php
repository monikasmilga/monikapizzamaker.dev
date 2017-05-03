<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pizzas', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('category_id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('crust_id', 36)->unique('crust_id_UNIQUE');
			$table->string('cheese_id', 36)->nullable()->unique('cheese_id_UNIQUE');
			$table->string('name');
			$table->string('phone');
			$table->text('comment', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pizzas');
	}

}
