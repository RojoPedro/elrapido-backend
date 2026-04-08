<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Autenticazione
 *
 * Endpoint per gestire l'accesso e l'uscita degli utenti amministrativi.
 */
class AuthController extends Controller
{
    /**
     * Login amministratore
     *
     * Invia le credenziali per ottenere un token di accesso (Personal Access Token). 
     * Il token ottenuto dovrà essere incluso nell'header `Authorization` come `Bearer {token}` per tutte le successive richieste protette.
     *
     * @bodyParam email string required L'indirizzo email dell'utente amministratore. Example: admin@elrapido.it
     * @bodyParam password string required La password dell'utente. Example: password
     *
     * @response {"token": "1|nLx9...yS7A"}
     * @response 401 {"message": "Credenziali non valide"}
     * @response 422 {"message": "The email field is required.", "errors": {"email": ["The email field is required."]}}
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Credenziali non valide'], 401);
        }

        $token = $request->user()->createToken('cms-token')->plainTextToken;

        return response()->json(['token' => $token]);
    }

    /**
     * Logout
     *
     * Revoca il token corrente utilizzato per l'autenticazione, invalidandolo per le chiamate future.
     *
     * @authenticated
     * @response {"message": "Logout effettuato"}
     * @response 401 {"message": "Unauthenticated."}
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logout effettuato']);
    }
}