<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['name' => 'English','name_ru' => 'Английский' , 'name_tm' => 'Iňlisçe'],
            ['name' => '| Russian |', 'name_ru' => '| Русский |' , 'name_tm' => '| Rusça |'],
            ['name' => 'Turkmen', 'name_ru' => 'Туркменский', 'name_tm' => 'Türkmençe'],
        ];

        foreach ($languages as $language) {
            $obj = new Language();
            $obj->name = $language['name'];
            $obj->name_ru = $language['name_ru'];
            $obj->name_tm = $language['name_tm'];
            $obj->save();
        }
    }
}
