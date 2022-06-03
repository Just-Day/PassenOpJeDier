<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetVogelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vogel_pet_array = ["Parkiet"];

        foreach($vogel_pet_array as $vogel){
            DB::table('pet')->insert([
                'name' => "Parkiet", 
                'kind' => "Vogel",
                'image' => "/img/parkiet_default.jpg",
                'description' => "A talkative Parkiet bird who you can talk to!",
                'length' => "8 Hours",
                'wage' => "6,47",
                'when' => "7-9-2022",
                'user' =>"SjakieDV@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Kanarie", 
                'kind' => "Vogel",
                'image' => "/img/kanarie_default.jpg",
                'description' => "A talkative Kanarie bird who you can talk to!",
                'length' => "5,5 Hours",
                'wage' => "6,74",
                'when' => "17-8-2022",
                'user' =>"ethel@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Papegaai", 
                'kind' => "Vogel",
                'image' => "/img/papegaai_default.jpg",
                'description' => "A talkative Papegaai bird who you can talk to!",
                'length' => "8 Hours",
                'wage' => "7,42",
                'when' => "7-7-2022",
                'user' =>"GelukG1@gmail.com"
            ]);
        }
    }
}
