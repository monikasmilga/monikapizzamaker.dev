<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.02
 * Time: 13:06
 */

namespace App\models;


class PizzaCrustsCheesesIngredientsConnection extends CoreModel
{
    protected $table = 'pizza_crusts_cheeses_ingredients_connection';

    protected $fillable = ['id', 'name', 'calories', 'crust_id', 'cheese_id', 'ingredient_1_id', 'ingredient_2_id', 'ingredient_3_id'];
}