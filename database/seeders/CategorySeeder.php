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
            ['name_en'=>'Fiction', 'name_tm' => 'Toslama', 'name_ru' => 'Фантастика'],
            ['name_en'=>'Non-Fiction', 'name_tm' => 'Non-Toslama', 'name_ru' => 'Нон-Фантастика'],
            ['name_en'=>'Novel', 'name_tm' => 'Roman', 'name_ru' => 'Роман'],
            ['name_en'=>'Romance', 'name_tm' => 'Romantika', 'name_ru' => 'Романтика'],
            ['name_en'=>'Children\'s book', 'name_tm' => 'Çagalaryň kitaby', 'name_ru' => 'Детские книги'],
            ['name_en'=>'Biography', 'name_tm' => 'Biografiya', 'name_ru' => 'Биография'],
            ['name_en'=>'Autobiography', 'name_tm' => 'Awtobiografiya', 'name_ru' => 'Автобиография'],
            ['name_en'=>'Mystery', 'name_tm' => 'Syr' , 'name_ru' => 'Загадка'],
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name_en = $category['name_en'];
            $obj->name_tm = $category['name_tm'];
            $obj->name_ru = $category['name_ru'];
            $obj->save();
        }
    }
}
