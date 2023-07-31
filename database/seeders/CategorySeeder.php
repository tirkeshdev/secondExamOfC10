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
            ['name'=>'Fiction', 'name_tm' => 'Toslama', 'name_ru' => 'Фантастика'],
            ['name'=>'Non-Fiction', 'name_tm' => 'Non-Toslama', 'name_ru' => 'Нон-Фантастика'],
            ['name'=>'Novel', 'name_tm' => 'Roman', 'name_ru' => 'Роман'],
            ['name'=>'Romance', 'name_tm' => 'Romantika', 'name_ru' => 'Романтика'],
            ['name'=>'Children\'s book', 'name_tm' => 'Çagalaryň kitaby', 'name_ru' => 'Детские книги'],
            ['name'=>'Biography', 'name_tm' => 'Biografiya', 'name_ru' => 'Биография'],
            ['name'=>'Autobiography', 'name_tm' => 'Awtobiografiya', 'name_ru' => 'Автобиография'],
            ['name'=>'Mystery', 'name_tm' => 'Syr' , 'name_ru' => 'Загадка'],
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name = $category['name'];
            $obj->name_tm = $category['name_tm'];
            $obj->name_ru = $category['name_ru'];
            $obj->save();
        }
    }
}
