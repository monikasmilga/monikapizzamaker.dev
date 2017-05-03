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
    protected $fillable = ['id', 'name', 'phone', 'comment', '	crust_id', 'cheese_id'];
}