<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.03
 * Time: 11:54
 */

namespace App\models;


class PizzasIngredientsConnection extends CoreModel
{

    protected $table = 'pizzas_ingredients_connection';
    protected $fillable = ['id', 'pizza_id', 'calories'];

    protected $hidden =['updated_at', 'deleted_at', 'created_at', 'id', 'ingredient_id', 'pizza_id', 'count'];

    public function ingredients()
    {
        return $this->hasOne(Ingredients::class, 'id', 'ingredient_id');
    }
}

