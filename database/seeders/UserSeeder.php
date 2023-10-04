<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@fic8.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'roles' => 'Administrator',
        ]);
        User::factory(100)->create();
    }
}
