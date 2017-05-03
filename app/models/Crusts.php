<?php
/**
 * Created by PhpStorm.
 * User: Monika Kavaliauskait
 * Date: 2017.05.03
 * Time: 11:53
 */

namespace App\models;


class Crusts extends CoreModel
{

    protected $table = 'crusts';
    protected $fillable = ['id', 'name', 'calories'];
}