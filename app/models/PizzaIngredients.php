<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.02
 * Time: 13:05
 */

namespace App\models;


class PizzaIngredients extends CoreModel
{
    protected $table = 'pizza_ingredients';

    protected $fillable = ['id', 'name', 'calories' ];
}