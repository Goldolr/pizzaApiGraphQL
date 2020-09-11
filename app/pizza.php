<?php

namespace App;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pizza extends Model
{
    // public function users(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function ingredients(): HasMany
    // {
    //     return $this->hasMany(Ingredient::class);
    // }
    // protected $fillable = ['name','ingredient_id', 'origin'];
    protected $guarded=[];
    public function ingredient()
    {
        return $this->belongsTo(ingredient::class);
    }
}
