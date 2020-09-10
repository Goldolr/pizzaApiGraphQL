<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ingredient extends Model
{

    protected $fillable=['name','calories'];

    public function pizza(): BelongsTo
    {
        return $this->belongsTo(pizza::class);
    }
}
