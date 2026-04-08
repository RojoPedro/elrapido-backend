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
    protected $description = 'Rimuove le pizze duplicate basandosi sul nome e sulla lista degli ingredienti.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pizzas = Pizza::with('ingredients')->get();

        $grouped = $pizzas->groupBy(function ($pizza) {
            $ingredientIds = $pizza->ingredients->pluck('id')->sort()->implode(',');
            return strtolower($pizza->name) . '|' . $ingredientIds;
        });

        $duplicatesFound = false;

        foreach ($grouped as $key => $items) {
            if ($items->count() > 1) {
                $duplicatesFound = true;
                $original = $items->shift(); // Keep the first one
                $this->info("Trovati " . ($items->count()) . " duplicati per: " . $original->name);

                foreach ($items as $duplicate) {
                    $this->warn("Elimino duplicato ID: " . $duplicate->id);
                    $duplicate->delete();
                }
            }
        }

        if (!$duplicatesFound) {
            $this->info('Nessuna pizza duplicata trovata.');
        } else {
            $this->info('Pulizia completata.');
        }
    }
}
