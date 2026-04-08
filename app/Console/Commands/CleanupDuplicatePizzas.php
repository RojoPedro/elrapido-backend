<?php

namespace App\Console\Commands;

use App\Models\Pizza;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CleanupDuplicatePizzas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cleanup-duplicate-pizzas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rimuove le pizze duplicate basandosi sul nome (trim/lowercase) e sulla lista dei nomi degli ingredienti.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Inizio scansione duplicati...");
        
        $pizzas = Pizza::with('ingredients')->get();

        $grouped = $pizzas->groupBy(function ($pizza) {
            // Puliamo il nome: minuscolo e senza spazi extra
            $cleanName = strtolower(trim($pizza->name));
            
            // Lista dei nomi degli ingredienti (invece degli ID) per evitare problemi di ID duplicati
            $ingredientNames = $pizza->ingredients->pluck('name')->map(fn($n) => strtolower(trim($n)))->sort()->implode(',');
            
            return $cleanName . '|' . $ingredientNames;
        });

        $duplicatesFound = false;

        foreach ($grouped as $key => $items) {
            if ($items->count() > 1) {
                $duplicatesFound = true;
                
                // Teniamo la prima pizza (preferiamo quella con l'ID che sembra più "vecchio" o semplicemente la prima della lista)
                $original = $items->shift(); 
                $this->info("Trovati " . ($items->count()) . " duplicati per: [" . $original->name . "]");

                foreach ($items as $duplicate) {
                    $this->warn("   -> Elimino duplicato ID: " . $duplicate->id . " (Posizione: " . $duplicate->position . ")");
                    $duplicate->delete();
                }
            }
        }

        if (!$duplicatesFound) {
            $this->info('Nessuna pizza duplicata trovata con la nuova logica robusta.');
        } else {
            $this->info('Pulizia completata con successo.');
        }
    }
}
