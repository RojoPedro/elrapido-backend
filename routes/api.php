<?php

use App\Http\Controllers\Api\PizzaController;
use App\Http\Controllers\Api\IngredientController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/debug-hash', function () {
    $hash = bcrypt('password');
    $check = \Illuminate\Support\Facades\Hash::check('password', $hash);
    $userHash = \App\Models\User::where('email', 'admin@elrapido.it')->value('password');
    $checkUser = \Illuminate\Support\Facades\Hash::check('password', $userHash);
    
    return response()->json([
        'generated_hash' => $hash,
        'hash_works' => $check,
        'user_hash_in_db' => $userHash,
        'password_matches_db' => $checkUser,
    ]);
});

// --- ROTTE PUBBLICHE ---
Route::post('/login', [AuthController::class, 'login']);
Route::get('/pizze', [PizzaController::class, 'index']);
// Gli ingredienti sono utili anche al pubblico per i filtri di ricerca
Route::get('/ingredients', [IngredientController::class, 'index']); 


// --- ROTTE PROTETTE (CMS) ---
Route::middleware('auth:sanctum')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Pizze
    Route::post('/pizze', [PizzaController::class, 'store']);
    Route::put('/pizze/{pizza}', [PizzaController::class, 'update']);
    Route::delete('/pizze/{pizza}', [PizzaController::class, 'destroy']);

    // Ingredienti
    Route::post('/ingredients', [IngredientController::class, 'store']);
    Route::put('/ingredients/{ingredient}', [IngredientController::class, 'update']);
    Route::delete('/ingredients/{ingredient}', [IngredientController::class, 'destroy']);
    
});