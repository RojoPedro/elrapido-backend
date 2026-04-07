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
}
