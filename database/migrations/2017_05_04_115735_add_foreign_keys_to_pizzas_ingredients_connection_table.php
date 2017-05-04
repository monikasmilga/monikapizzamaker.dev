<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPizzasIngredientsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pizzas_ingredients_connection', function(Blueprint $table)
		{
			$table->foreign('ingredient_id', 'fk_pizzas_ingredients_connection_ingredients1')->references('id')->on('ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizza_id', 'fk_pizzas_ingredients_connection_pizzas1')->references('id')->on('pizzas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pizzas_ingredients_connection', function(Blueprint $table)
		{
			$table->dropForeign('fk_pizzas_ingredients_connection_ingredients1');
			$table->dropForeign('fk_pizzas_ingredients_connection_pizzas1');
		});
	}

}
