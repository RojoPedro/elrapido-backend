<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Updates the password for user ID 1 (admin@elrapido.it) to the
     * bcrypt hash of "tazmania". DB::table is used intentionally to
     * bypass the User model's 'hashed' cast and avoid double-hashing.
     */
    public function up(): void
    {
        DB::table('users')
            ->where('id', 1)
            ->update([
                'password' => Hash::make('tazmania'),
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * Restores the previously known bcrypt hash for "password" so the
     * migration can be rolled back cleanly.
     */
    public function down(): void
    {
        DB::table('users')
            ->where('id', 1)
            ->update([
                'password' => '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            ]);
    }
};
