<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePizzaCrustsCheesesIngredientsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pizza_crusts_cheeses_ingredients_connection', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('category_id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('crust_id', 36)->unique('crust_id_UNIQUE');
			$table->string('cheese_id', 36)->unique('cheese_id_UNIQUE');
			$table->string('ingredient_1_id', 36)->unique('ingredient_1_id_UNIQUE');
			$table->string('ingredient_2_id', 36)->unique('ingredient_2_id_UNIQUE');
			$table->string('ingredient_3_id', 36)->unique('ingredient_3_id_UNIQUE');
			$table->string('name');
			$table->integer('calories')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pizza_crusts_cheeses_ingredients_connection');
	}

}
