<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HouseAppartementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house_appartement_array = ["Leiden"];

        foreach($house_appartement_array as $house_appartement){
            DB::table('houses')->insert([
                'name' => "Leiden",
                'kind' => "Appartement",
                'image' => "/img/appartement_leiden.jpg",
                'description' => "An Appartement in Leiden where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Noordwijk",
                'kind' => "Appartement",
                'image' => "/img/appartement_noordwijk.jpg",
                'description' => "An Appartement in Noordwijk where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Katwijk",
                'kind' => "Appartement",
                'image' => "/img/appartement_katwijk.jpg",
                'description' => "An Appartement in Katwijk where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Voorhout",
                'kind' => "Appartement",
                'image' => "/img/appartement_voorhout.jpg",
                'description' => "An Appartement in Voorhout where your pet can stay"
            ]);
        }    
    }
}
