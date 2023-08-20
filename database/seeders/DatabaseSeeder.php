<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Language;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            LanguageSeeder::class,
        ]);

        \App\Models\Author::factory(100)->create();
        \App\Models\Publisher::factory(100)->create();
        \App\Models\Book::factory(1000)->create();

    }
}
