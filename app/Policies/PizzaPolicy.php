<?php

namespace App\Policies;

use App\Models\Pizza;
use App\Models\User;

class PizzaPolicy
{
    /**
     * Determina se l'utente può creare pizze.
     */
    public function create(User $user): bool
    {
        // Solo gli utenti loggati possono creare (logica base)
        // In futuro: return $user->role === 'admin';
        return true; 
    }

    /**
     * Determina se l'utente può aggiornare la pizza.
     */
    public function update(User $user, Pizza $pizza): bool
    {
        return true;
    }

    /**
     * Determina se l'utente può eliminare la pizza.
     */
    public function delete(User $user, Pizza $pizza): bool
    {
        // Esempio: Il pizzaiolo può eliminare solo se la pizza non è "Speciale" 
        // o se ha permessi admin
        return true;
    }
}
