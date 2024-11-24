<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test Admin',
            'email' => 'test@abv.bg',
            'password' => Hash::make('123456'),
        ]);

        User::factory(50)->create();
    }
}
