<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        $author = DB::table('authors')->inRandomOrder()->first();
        $publisher = DB::table('publishers')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();
        $name_tm = fake()->streetName();
        $name_ru = null;
        $name_en = null;
        $isSold = fake()->boolean(30);
        $isHard = fake()->boolean(50);
        $isLanguage = fake()->boolean(50);
        return [
            'author_id' => $author->id,
            'publisher_id' => $publisher->id,
            'category_id' => $category->id,
            'name_tm' => $name_tm,
            'name_ru' => $name_ru ? $name_ru : $name_tm,
            'name_en' => $name_en ,
            'image' => 'https://play-lh.googleusercontent.com/_tslXR7zUXgzpiZI9t70ywHqWAxwMi8LLSfx8Ab4Mq4NUTHMjFNxVMwTM1G0Q-XNU80',
            'description_tm' => fake()->paragraph(),
            'price' => rand(400, 1500),
            'sold' => $isSold,
            'page' => rand(100, 800),
            'barcode' => fake()->isbn13(),
            'year' => rand(2000,2023),
            'language' => $isLanguage,
            'bookcover' => $isHard,

        ];
    }
}
