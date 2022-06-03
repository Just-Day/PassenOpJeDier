<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HouseStudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house_studio_array = ["Leiden"];

        foreach($house_studio_array as $house_studio){
            DB::table('houses')->insert([
                'name' => "Voorhout",
                'kind' => "Studio",
                'image' => "/img/studio_voorhout.jpg",
                'description' => "A studio in Voorhout where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Leiden",
                'kind' => "Studio",
                'image' => "/img/studio_leiden.jpg",
                'description' => "A studio in Leiden where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Noordwijk",
                'kind' => "Studio",
                'image' => "/img/studio_noordwijk.jpg",
                'description' => "A studio in Noordwijk where your pet can stay"
            ]);

            DB::table('houses')->insert([
                'name' => "Katwijk",
                'kind' => "Studio",
                'image' => "/img/studio_katwijk.jpg",
                'description' => "A studio in Katwijk where your pet can stay"
            ]);
        }
    }
}
