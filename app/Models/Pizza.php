<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price_baby',
        'price_normale',
        'price_media',
        'price_maxi',
        'is_visible',
    ];
    
    // app/Models/Pizza.php

protected $casts = [
    'price_baby' => 'decimal:2',
    'price_normale' => 'decimal:2',
    'price_media' => 'decimal:2',
    'price_maxi' => 'decimal:2',
    'is_visible' => 'boolean',
];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}