<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePizzasIngredientsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pizzas_ingredients_connection', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('pizza_id', 45)->index('fk_pizzas_ingredients_connection_pizzas1_idx');
			$table->string('ingredient_id', 45)->index('fk_pizzas_ingredients_connection_ingredients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pizzas_ingredients_connection');
	}

}
