<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pizza extends Model
{
    protected $fillable = [
        'name', 'origin'
    ];
    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class, 'pizzas_id');
    }
}
