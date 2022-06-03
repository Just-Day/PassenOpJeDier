<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfPetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_pet_array = ["Hond", "Kat", "Vogel", "Konijn", "Vis"];

        foreach($kind_of_pet_array as $kind_of_pet){
            DB::table('kind_of_pet')->insert([
                'kind' => $kind_of_pet
            ]);
        }
    }
}
