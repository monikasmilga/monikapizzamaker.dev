<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.02
 * Time: 13:04
 */

namespace App\models;


class PizzaCrusts extends CoreModel
{
    protected $table = 'pizza_crusts';

    protected $fillable = ['id', 'name', 'calories' ];
}