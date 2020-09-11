<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ingredient extends Model
{

    // protected $fillable=['name','calories'];
    protected $guarded=[];

    public function pizzas()
    {
        return $this->hasMany(pizza::class);
    }
}
