<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            'Ashgabat',
            'Ahal',
            'Dashoguz',
            'Mary',
            'Lebap',
            'Balkan'
        ];


        foreach ($locations as $location){
            $el = new Location();
            $el->name = $location;
            $el->save();
        }

    }
}
