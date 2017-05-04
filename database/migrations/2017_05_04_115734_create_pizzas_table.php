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
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('crust_id', 36)->index('fk_pizza_crusts_cheeses_ingredients_connection_pizza_crusts');
			$table->string('cheese_id', 36)->nullable()->index('fk_pizza_crusts_cheeses_ingredients_connection_pizza_cheeses1');
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
