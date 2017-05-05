<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.03
 * Time: 11:52
 */

namespace App\models;


class Cheeses extends CoreModel
{

    protected $table = 'cheeses';
    protected $fillable = ['id', 'name', 'calories'];

    protected $hidden =[];
}