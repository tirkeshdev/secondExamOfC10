<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Fiction',
            'Non-Fiction',
            'Novel',
            'Romance',
            'Children\'s Books',
            'Biography',
            'Autobiography',
            'Mystery',
        ];

        foreach ($categories as $category){
            $el = new Category();
            $el->name = $category;
            $el->save();
        }
    }
}
