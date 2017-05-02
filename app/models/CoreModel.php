<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CoreModel extends Model
{
use SoftDeletes;

public $incrementing = false;
}