<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Pizza extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'description',
        'price_baby',
        'price_normale',
        'price_media',
        'price_maxi',
        'is_visible',
        'position',
    ];

    protected $casts = [
        'price_baby' => 'decimal:2',
        'price_normale' => 'decimal:2',
        'price_media' => 'decimal:2',
        'price_maxi' => 'decimal:2',
        'is_visible' => 'boolean',
        'position' => 'integer',
    ];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}