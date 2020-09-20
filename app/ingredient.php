<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ingredient extends Model
{
    protected $fillable = [
        'name', 'calories','pizzas_id'
    ];
    public function pizzas(): BelongsTo
    {
        return $this->belongsTo(Pizza::class);
    }
}
