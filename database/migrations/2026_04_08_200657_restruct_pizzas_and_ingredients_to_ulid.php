<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Aggiungiamo le colonne temporanee ULID e il campo position
        Schema::table('pizzas', function (Blueprint $table) {
            $table->ulid('ulid')->after('id')->nullable();
            $table->integer('position')->default(0)->after('is_visible');
        });

        Schema::table('ingredients', function (Blueprint $table) {
            $table->ulid('ulid')->after('id')->nullable();
        });

        // 2. Popoliamo gli ULID e la position
        $pizzas = DB::table('pizzas')->orderBy('id')->get();
        $pos = 10;
        foreach ($pizzas as $pizza) {
            DB::table('pizzas')->where('id', $pizza->id)->update([
                'ulid' => (string) Str::ulid(),
                'position' => $pos
            ]);
            $pos += 10;
        }

        $ingredients = DB::table('ingredients')->get();
        foreach ($ingredients as $ingredient) {
            DB::table('ingredients')->where('id', $ingredient->id)->update([
                'ulid' => (string) Str::ulid()
            ]);
        }

        // 3. Prepariamo la tabella pivot
        Schema::table('ingredient_pizza', function (Blueprint $table) {
            $table->char('pizza_ulid', 26)->nullable()->after('pizza_id');
            $table->char('ingredient_ulid', 26)->nullable()->after('ingredient_id');
        });

        // 4. Migriamo le relazioni nella pivot
        DB::statement("UPDATE ingredient_pizza ip 
            JOIN pizzas p ON ip.pizza_id = p.id 
            JOIN ingredients i ON ip.ingredient_id = i.id
            SET ip.pizza_ulid = p.ulid, ip.ingredient_ulid = i.ulid");

        // 5. Rimuoviamo i vincoli e le vecchie colonne
        Schema::table('ingredient_pizza', function (Blueprint $table) {
            $table->dropForeign(['pizza_id']);
            $table->dropForeign(['ingredient_id']);
            $table->dropPrimary(['pizza_id', 'ingredient_id']);
            $table->dropColumn(['pizza_id', 'ingredient_id']);
        });

        Schema::table('pizzas', function (Blueprint $table) {
            $table->dropColumn('id');
        });

        Schema::table('ingredients', function (Blueprint $table) {
            $table->dropColumn('id');
        });

        // 6. Rinominiamo le colonne ULID in ID e impostiamo le nuove chiavi
        Schema::table('pizzas', function (Blueprint $table) {
            $table->renameColumn('ulid', 'id');
        });
        Schema::table('pizzas', function (Blueprint $table) {
            $table->primary('id');
        });

        Schema::table('ingredients', function (Blueprint $table) {
            $table->renameColumn('ulid', 'id');
        });
        Schema::table('ingredients', function (Blueprint $table) {
            $table->primary('id');
        });

        Schema::table('ingredient_pizza', function (Blueprint $table) {
            $table->renameColumn('pizza_ulid', 'pizza_id');
            $table->renameColumn('ingredient_ulid', 'ingredient_id');
        });

        Schema::table('ingredient_pizza', function (Blueprint $table) {
            $table->primary(['pizza_id', 'ingredient_id']);
            $table->foreign('pizza_id')->references('id')->on('pizzas')->onDelete('cascade');
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // La reversibilità di questa migrazione è complessa e distruttiva per gli ID.
    }
};
