<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pizzas', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_pizza_crusts_cheeses_ingredients_connection_pizza_cheeses1')->references('id')->on('cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('crust_id', 'fk_pizza_crusts_cheeses_ingredients_connection_pizza_crusts')->references('id')->on('crusts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pizzas', function(Blueprint $table)
		{
			$table->dropForeign('fk_pizza_crusts_cheeses_ingredients_connection_pizza_cheeses1');
			$table->dropForeign('fk_pizza_crusts_cheeses_ingredients_connection_pizza_crusts');
		});
	}

}
