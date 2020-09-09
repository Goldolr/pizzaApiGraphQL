<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ingredient extends Model
{
    public function pizza(): BelongsTo
    {
        return $this->belongsTo(Ingredient::class);
    }
}
