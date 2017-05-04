<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.03
 * Time: 11:53
 */

namespace App\models;


class Pizzas extends CoreModel
{

    protected $table = 'pizzas';
    protected $fillable = ['id', 'name', 'phone', 'comment', 'crust_id', 'cheese_id'];


    public function crusts()
    {
        return $this->hasOne(Crusts::class, 'id', 'crust_id');
    }

    public function cheeses()
    {
        return $this->hasOne(Cheeses::class, 'id', 'cheese_id');
    }

    public function pizzasIngredientsConnection()
    {
        return $this->hasMany(PizzasIngredientsConnection::class, 'pizza_id', 'id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class, 'pizzas_ingredients_connection', 'pizza_id', 'ingredient_id');
    }

}