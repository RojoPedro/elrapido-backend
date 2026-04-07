<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pizzas', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->decimal('price_baby', 8, 2)->nullable();
            $table->decimal('price_normale', 8, 2)->nullable();
            $table->decimal('price_media', 8, 2)->nullable();
            $table->decimal('price_maxi', 8, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pizzas', function (Blueprint $table) {
            $table->dropColumn(['price_baby', 'price_normale', 'price_media', 'price_maxi']);
            $table->decimal('price', 8, 2);
        });
    }
};