<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use App\Http\Resources\PizzaResource;
use App\Http\Requests\StorePizzaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @group Menu & Pizze
 *
 * API per la gestione del menu delle pizze.
 */
class PizzaController extends Controller
{
    use AuthorizesRequests;

    /**
     * Elenco pizze
     *
     * Recupera la lista di tutte le pizze disponibili. Per impostazione predefinita, restituisce solo le pizze visibili nel menu.
     *
     * @queryParam all boolean Mostra tutte le pizze (anche quelle nascoste). Solo per amministratori. Example: true
     * 
     * @apiResourceCollection App\Http\Resources\PizzaResource
     * @apiResourceModel \App\Models\Pizza
     */
    public function index(Request $request)
    {
        $query = Pizza::with('ingredients')
            ->orderBy('is_visible', 'desc')
            ->orderBy('position', 'asc');

        if (!$request->has('all')) {
            $query->where('is_visible', true);
        }

        $pizze = $query->get();

        return PizzaResource::collection($pizze);
    }

    /**
     * Riordina pizze (Bulk)
     *
     * Aggiorna la posizione di più pizze contemporaneamente. Utile per il drag-and-drop nel CMS.
     * 
     * @authenticated
     * @bodyParam orders array required Una lista di oggetti con 'id' e 'position'. Example: [{"id": "01JKW...", "position": 10}, {"id": "01JKX...", "position": 20}]
     * @bodyParam orders[].id string required L'ULID della pizza.
     * @bodyParam orders[].position integer required La nuova posizione.
     * 
     * @response {"message": "Ordinamento aggiornato con successo."}
     */
    public function reorder(Request $request)
    {
        $request->validate([
            'orders' => 'required|array',
            'orders.*.id' => 'required|exists:pizzas,id',
            'orders.*.position' => 'required|integer',
        ]);

        DB::transaction(function () use ($request) {
            foreach ($request->orders as $order) {
                Pizza::where('id', $order['id'])->update(['position' => $order['position']]);
            }
        });

        return response()->json(['message' => 'Ordinamento aggiornato con successo.']);
    }

    /**
     * Crea nuova pizza
     *
     * Aggiunge una nuova pizza al menu con i relativi ingredienti.
     *
     * @authenticated
     * @apiResource App\Http\Resources\PizzaResource
     * @apiResourceModel \App\Models\Pizza
     */
    public function store(StorePizzaRequest $request)
    {
        $this->authorize('create', Pizza::class);

        return DB::transaction(function () use ($request) {
            $data = $request->validated();
            
            // Assegniamo la posizione automatica se non fornita
            if (!isset($data['position'])) {
                $maxPosition = Pizza::max('position') ?? 0;
                $data['position'] = $maxPosition + 10;
            }

            $pizza = Pizza::create($data);

            if ($request->has('ingredients')) {
                $pizza->ingredients()->sync($request->ingredients);
            }

            return new PizzaResource($pizza->load('ingredients'));
        });
    }

    /**
     * Aggiorna pizza
     *
     * Modifica i dettagli di una pizza esistente e aggiorna i suoi ingredienti.
     *
     * @authenticated
     * @apiResource App\Http\Resources\PizzaResource
     * @apiResourceModel \App\Models\Pizza
     */
    public function update(StorePizzaRequest $request, Pizza $pizza)
    {
        $this->authorize('update', $pizza);

        return DB::transaction(function () use ($request, $pizza) {
            $pizza->update($request->validated());

            if ($request->has('ingredients')) {
                $pizza->ingredients()->sync($request->ingredients);
            }

            return new PizzaResource($pizza->load('ingredients'));
        });
    }

    /**
     * Elimina pizza
     *
     * Rimuove definitivamente una pizza dal menu.
     *
     * @authenticated
     * @response {"message": "Pizza 'Margherita' eliminata con successo dal menu."}
     */
    public function destroy(Pizza $pizza)
    {
        $this->authorize('delete', $pizza);

        $pizza->delete();

        return response()->json([
            'message' => "Pizza '{$pizza->name}' eliminata con successo dal menu."
        ], 200);
    }
}
