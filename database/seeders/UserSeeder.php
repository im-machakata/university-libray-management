<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->create([
            'name' => 'John',
            'surname' => 'Doe',
            'username' => 'john.doe',
            'password' => 'john123',
            'phone' => '071234567',
            'role' => 'Admin'
        ]);
    }
}
