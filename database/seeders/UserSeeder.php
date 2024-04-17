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
            'name' => 'System',
            'surname' => 'Admin',
            'username' => 'admin',
            'password' => 'admin',
            'phone' => '071234567',
            'role' => 'Admin'
        ]);
    }
}
