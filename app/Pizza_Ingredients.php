<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza_Ingredients extends Model
{
    protected $fillable=["pizza_id","ingredient_id"];
}
