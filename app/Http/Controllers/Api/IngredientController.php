<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @group Ingredienti
 *
 * API per la gestione degli ingredienti disponibili nel database.
 */
class IngredientController extends Controller
{
    use AuthorizesRequests;

    /**
     * Elenco ingredienti
     *
     * Recupera la lista completa di tutti gli ingredienti censiti nel sistema, ordinati alfabeticamente.
     * 
     * @response [{"id": 1, "name": "Pomodoro", "created_at": "2024-04-01T12:00:00.000000Z", "updated_at": "2024-04-01T12:00:00.000000Z"}, {"id": 2, "name": "Mozzarella", "created_at": "2024-04-01T12:00:00.000000Z", "updated_at": "2024-04-01T12:00:00.000000Z"}]
     */
    public function index()
    {
        return response()->json(Ingredient::all());
    }

    /**
     * Crea ingrediente
     *
     * Aggiunge un nuovo ingrediente utilizzabile nelle pizze.
     *
     * @authenticated
     * @bodyParam name string required Il nome dell'ingrediente. Deve essere unico. Example: Mozzarella di Bufala
     * 
     * @response 201 {"id": 10, "name": "Mozzarella di Bufala", "created_at": "2024-04-01T12:00:00.000000Z", "updated_at": "2024-04-01T12:00:00.000000Z"}
     */
    public function store(Request $request)
    {
        $this->authorize('create', Ingredient::class);

        $validated = $request->validate([
            'name' => 'required|string|unique:ingredients,name|max:50'
        ]);

        $ingredient = Ingredient::create($validated);

        return response()->json($ingredient, 201);
    }

    /**
     * Aggiorna ingrediente
     *
     * Modifica il nome di un ingrediente esistente.
     *
     * @authenticated
     * @bodyParam name string required Il nuovo nome dell'ingrediente. Example: Gorgonzola DOP
     * 
     * @response {"id": 10, "name": "Gorgonzola DOP", "created_at": "2024-04-01T12:00:00.000000Z", "updated_at": "2024-04-01T12:00:00.000000Z"}
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $this->authorize('update', $ingredient);

        $validated = $request->validate([
            'name' => 'required|string|unique:ingredients,name,' . $ingredient->id
        ]);

        $ingredient->update($validated);

        return response()->json($ingredient);
    }

    /**
     * Elimina ingrediente
     *
     * Rimuove un ingrediente. L'operazione fallisce se l'ingrediente è attualmente associato ad almeno una pizza.
     *
     * @authenticated
     * @response {"status": "success", "message": "Ingrediente '...' rimosso con successo."}
     * @response 409 {"status": "error", "code": "INGREDIENT_IN_USE", "message": "Impossibile eliminare: ingrediente in uso.", "data": {"affected_pizzas": [{"id": 1, "name": "Margherita"}]}}
     */
    public function destroy(Ingredient $ingredient)
    {
        $this->authorize('delete', $ingredient);

        $pizzeCoinvolte = $ingredient->pizzas()->select('pizzas.id', 'pizzas.name')->get();

        if ($pizzeCoinvolte->isNotEmpty()) {
            return response()->json([
                'status' => 'error',
                'code' => 'INGREDIENT_IN_USE',
                'message' => "Impossibile eliminare: ingrediente in uso.",
                'data' => [
                    'affected_pizzas' => $pizzeCoinvolte
                ]
            ], 409);
        }

        $ingredient->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Ingrediente '{$ingredient->name}' rimosso con successo."
        ]);
    }
}