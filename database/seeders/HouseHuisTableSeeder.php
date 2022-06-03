<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HouseHuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house_huis_array = ["Leiden"];

        foreach($house_huis_array as $house_huis){
            DB::table('houses')->insert([
                'name' => "Leiden",
                'kind' => "Huis",
                'image' => "/img/huis_leiden.jpg",
                'description' => "A Huis in Leiden where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Noordwijk",
                'kind' => "Huis",
                'image' => "/img/huis_noordwijk.jpg",
                'description' => "A Huis in Noordwijk where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Katwijk",
                'kind' => "Huis",
                'image' => "/img/huis_katwijk.jpg",
                'description' => "A Huis in Katwijk where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Voorhout",
                'kind' => "Huis",
                'image' => "/img/huis_voorhout.jpg",
                'description' => "A Huis in Voorhout where your pet can stay"
            ]);
        }
    }
}
