<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IngredientController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        // Tutti possono vedere gli ingredienti (utile per i filtri nel sito)
        return response()->json(Ingredient::all());
    }

    public function store(Request $request)
    {
        // Solo il pizzaiolo può aggiungere nuovi ingredienti
        $this->authorize('create', Ingredient::class);

        $validated = $request->validate([
            'name' => 'required|string|unique:ingredients,name|max:50'
        ]);

        $ingredient = Ingredient::create($validated);

        return response()->json($ingredient, 201);
    }

    public function update(Request $request, Ingredient $ingredient)
    {
        $this->authorize('update', $ingredient);

        $validated = $request->validate([
            'name' => 'required|string|unique:ingredients,name,' . $ingredient->id
        ]);

        $ingredient->update($validated);

        return response()->json($ingredient);
    }

    public function destroy(Ingredient $ingredient)
    {
        $this->authorize('delete', $ingredient);

        // Recuperiamo le pizze collegate (solo ID e nome per il frontend)
        $pizzeCoinvolte = $ingredient->pizzas()->select('pizzas.id', 'pizzas.name')->get();

        if ($pizzeCoinvolte->isNotEmpty()) {
            return response()->json([
                'status' => 'error',
                'code' => 'INGREDIENT_IN_USE',
                'message' => "Impossibile eliminare: ingrediente in uso.",
                'data' => [
                    'affected_pizzas' => $pizzeCoinvolte 
                ]
            ], 409); // Conflict
        }

        $ingredient->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Ingrediente '{$ingredient->name}' rimosso con successo."
        ]);
    }
}