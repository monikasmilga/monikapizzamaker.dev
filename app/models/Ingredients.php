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

    protected $table = 'ingredients';
    protected $fillable = ['id', 'name', 'calories'];

    protected $hidden =['updated_at', 'deleted_at', 'created_at', 'id', 'count'];
}