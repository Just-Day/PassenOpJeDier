<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfHousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_houses_array = ["Studio", "Appartement", "Huis"];

        foreach($kind_of_houses_array as $kind_of_house){
            DB::table('kind_of_houses')->insert([
                'kind' => $kind_of_house
            ]);
        }
    }
}
