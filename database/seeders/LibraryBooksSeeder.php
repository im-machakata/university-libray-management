<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibraryBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Book::query()->create([
                'title' => $faker->sentence(),
                'isbn' => $faker->macAddress(),
                'source' => $faker->url()
            ]);
        }
    }
}
