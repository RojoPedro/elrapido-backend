<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Ingredient extends Model
{
    use HasUlids;

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
