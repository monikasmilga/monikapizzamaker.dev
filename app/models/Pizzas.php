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

    protected $hidden =['updated_at', 'deleted_at', 'created_at', 'cheese_id', 'crust_id', 'count'];


    public function crusts()
    {
        return $this->hasOne(Crusts::class, 'id', 'crust_id');
    }

    public function cheeses()
    {
        return $this->hasOne(Cheeses::class, 'id', 'cheese_id');
    }

    public function ingredients()
    {
        return $this->hasMany(PizzasIngredientsConnection::class, 'pizza_id', 'id')->with('ingredients');
    }

    public function ingredientsForSync()
    {
        return $this->belongsToMany(Ingredients::class, 'pizzas_ingredients_connection', 'pizza_id', 'ingredient_id');
    }

}