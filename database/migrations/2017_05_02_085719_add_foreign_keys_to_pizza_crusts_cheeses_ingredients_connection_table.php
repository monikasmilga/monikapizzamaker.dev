<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPizzaCrustsCheesesIngredientsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pizza_crusts_cheeses_ingredients_connection', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_pizza_crusts_cheeses_ingredients_connection_pizza_cheeses1')->references('id')->on('pizza_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('crust_id', 'fk_pizza_crusts_cheeses_ingredients_connection_pizza_crusts')->references('id')->on('pizza_crusts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredient_1_id', 'fk_pizza_crusts_cheeses_ingredients_connection_pizza_ingredie1')->references('id')->on('pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredient_2_id', 'fk_pizza_crusts_cheeses_ingredients_connection_pizza_ingredie2')->references('id')->on('pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredient_3_id', 'fk_pizza_crusts_cheeses_ingredients_connection_pizza_ingredie3')->references('id')->on('pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pizza_crusts_cheeses_ingredients_connection', function(Blueprint $table)
		{
			$table->dropForeign('fk_pizza_crusts_cheeses_ingredients_connection_pizza_cheeses1');
			$table->dropForeign('fk_pizza_crusts_cheeses_ingredients_connection_pizza_crusts');
			$table->dropForeign('fk_pizza_crusts_cheeses_ingredients_connection_pizza_ingredie1');
			$table->dropForeign('fk_pizza_crusts_cheeses_ingredients_connection_pizza_ingredie2');
			$table->dropForeign('fk_pizza_crusts_cheeses_ingredients_connection_pizza_ingredie3');
		});
	}

}
