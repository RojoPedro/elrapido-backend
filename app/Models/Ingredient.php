<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name',
        'is_allergen',
    ];

    protected $casts = [
        'is_allergen' => 'boolean',
    ];

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class);
    }
}