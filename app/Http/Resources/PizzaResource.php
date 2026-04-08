<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PizzaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
{
        return [
            'id' => $this->id,
            'nome' => $this->name,
            'position' => $this->position,
            // Abbiamo escluso 'description' e 'price_baby' come richiesto
            'prezzi' => [
                'normale' => $this->price_normale,
                'media'   => $this->price_media,
                'maxi'    => $this->price_maxi,
            ],
            'is_visible' => (bool) $this->is_visible,
            // Trasformiamo la collezione di ingredienti in un semplice array di nomi
            'ingredienti' => $this->ingredients->pluck('name'),
        ];
}
}
