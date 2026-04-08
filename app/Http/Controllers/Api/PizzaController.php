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
    use AuthorizesRequests;

        public function index(Request $request)
    {
        $query = Pizza::with('ingredients');

        if (!$request->has('all')) {
            $query->where('is_visible', true);
        }

        $pizze = $query->get();

        return PizzaResource::collection($pizze);
    }

        public function store(StorePizzaRequest $request)
    {
        $this->authorize('create', Pizza::class);

        return DB::transaction(function () use ($request) {
            $pizza = Pizza::create($request->validated());

            if ($request->has('ingredients')) {
                $pizza->ingredients()->sync($request->ingredients);
            }

            return new PizzaResource($pizza->load('ingredients'));
        });
    }

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

        public function destroy(Pizza $pizza)
    {
        $this->authorize('delete', $pizza);

        $pizza->delete();

        return response()->json([
            'message' => "Pizza '{$pizza->name}' eliminata con successo dal menu."
        ], 200);
    }
}