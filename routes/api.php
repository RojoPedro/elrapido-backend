<?php

use App\Http\Controllers\Api\PizzaController;
use App\Http\Controllers\Api\IngredientController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

// --- ROTTE PUBBLICHE ---
Route::post('/login', [AuthController::class, 'login']);
Route::get('/pizze', [PizzaController::class, 'index']);
// Gli ingredienti sono utili anche al pubblico per i filtri di ricerca
Route::get('/ingredients', [IngredientController::class, 'index']); 


// --- ROTTE PROTETTE (CMS) ---
Route::middleware('auth:sanctum')->group(function () {
    
    // Pizze
    Route::post('/pizze', [PizzaController::class, 'store']);
    Route::put('/pizze/{pizza}', [PizzaController::class, 'update']);
    Route::delete('/pizze/{pizza}', [PizzaController::class, 'destroy']);

    // Ingredienti
    Route::post('/ingredients', [IngredientController::class, 'store']);
    Route::put('/ingredients/{ingredient}', [IngredientController::class, 'update']);
    Route::delete('/ingredients/{ingredient}', [IngredientController::class, 'destroy']);
    
});