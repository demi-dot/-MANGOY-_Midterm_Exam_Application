<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Book::create([
                'title' => $faker->sentence(3),
                'genre' => $faker->word(),
                'author' => $faker->name(),
                'price' => $faker->randomFloat(2, 500, 5000)
            ]);
        }
    }
}