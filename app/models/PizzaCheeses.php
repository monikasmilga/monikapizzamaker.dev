<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.02
 * Time: 13:00
 */

namespace App\models;


class PizzaCheeses extends CoreModel
{

    protected $table = 'pizza_cheeses';

    protected $fillable = ['id', 'name', 'calories' ];
}