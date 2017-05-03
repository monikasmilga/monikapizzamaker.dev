<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.03
 * Time: 11:53
 */

namespace App\models;


class Ingredients extends CoreModel
{

    protected $table = 'cheeses';
    protected $fillable = ['id', 'name', 'calories'];
}