<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePizzaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool { return true; } // Per ora permettiamo a tutti

public function rules(): array
{
    return [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price_normale' => 'required|numeric|min:0',
        'price_media' => 'nullable|numeric|min:0',
        'price_maxi' => 'nullable|numeric|min:0',
        'is_visible' => 'boolean',
        'ingredients' => 'array', // Array di ID degli ingredienti
        'ingredients.*' => 'exists:ingredients,id', // Ogni ID deve esistere davvero
    ];
}

public function bodyParameters(): array
{
    return [
        'name' => [
            'description' => 'Il nome della pizza.',
            'example' => 'Capricciosa',
        ],
        'description' => [
            'description' => 'Descrizione facoltativa della pizza.',
            'example' => 'Pomodoro, mozzarella, carciofini, olive e funghi.',
        ],
        'price_normale' => [
            'description' => 'Prezzo per la dimensione standard.',
            'example' => 8.50,
        ],
        'price_media' => [
            'description' => 'Prezzo per la dimensione media (opzionale).',
            'example' => 12.00,
        ],
        'price_maxi' => [
            'description' => 'Prezzo per la dimensione maxi (opzionale).',
            'example' => 16.50,
        ],
        'is_visible' => [
            'description' => 'Indica se la pizza deve apparire nel menu.',
            'example' => true,
        ],
        'ingredients' => [
            'description' => 'Lista di ID degli ingredienti da associare alla pizza.',
            'example' => [1, 5, 8],
        ],
    ];
}
}
