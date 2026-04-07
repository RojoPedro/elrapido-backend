<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use App\Http\Resources\PizzaResource;
use App\Http\Requests\StorePizzaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PizzaController extends Controller
{
    use AuthorizesRequests; // Importante per usare $this->authorize nei controller

    public function index(Request $request)
    {
        $query = Pizza::with('ingredients');

        // Se la richiesta NON ha il parametro 'all', mostriamo solo le pizze visibili
        // Tipicamente il CMS invierà ?all=1 per vedere anche quelle nascoste
        if (!$request->has('all')) {
            $query->where('is_visible', true);
        }

        $pizze = $query->get();

        return PizzaResource::collection($pizze);
    }

    public function store(StorePizzaRequest $request)
    {
        // Verifica se l'utente loggato può creare pizze secondo la PizzaPolicy
        $this->authorize('create', Pizza::class);

        return DB::transaction(function () use ($request) {
            // 1. Crea la pizza con i dati validati
            $pizza = Pizza::create($request->validated());

            // 2. Sincronizza gli ingredienti
            if ($request->has('ingredients')) {
                $pizza->ingredients()->sync($request->ingredients);
            }

            return new PizzaResource($pizza->load('ingredients'));
        });
    }

    public function update(StorePizzaRequest $request, Pizza $pizza)
    {
        // Verifica se l'utente può modificare questa specifica istanza di pizza
        $this->authorize('update', $pizza);

        return DB::transaction(function () use ($request, $pizza) {
            // 1. Aggiorna i dati
            $pizza->update($request->validated());

            // 2. Sincronizza gli ingredienti (sovrascrive i precedenti)
            if ($request->has('ingredients')) {
                $pizza->ingredients()->sync($request->ingredients);
            }

            return new PizzaResource($pizza->load('ingredients'));
        });
    }

    public function destroy(Pizza $pizza)
    {
        // Verifica se l'utente può eliminare questa pizza
        $this->authorize('delete', $pizza);

        $pizza->delete();

        return response()->json([
            'message' => "Pizza '{$pizza->name}' eliminata con successo dal menu."
        ], 200);
    }
}