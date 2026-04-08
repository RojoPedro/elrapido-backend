<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (! User::where('email', 'admin@elrapido.it')->exists()) {
            User::create([
                'name'     => 'Admin',
                'email'    => 'admin@elrapido.it',
                'password' => Hash::make('tazmania'),
            ]);
        }
    }
}
