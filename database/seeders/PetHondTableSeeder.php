<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetHondTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hond_pet_array = ["Bulldog"];

        foreach($hond_pet_array as $hond){
            DB::table('pet')->insert([
                'name' => "Bulldog", 
                'kind' => "Hond",
                'image' => "/img/bulldog_default.jpg",
                'description' => "A fun Bulldog dog who you can watch!",
                'length' => "2,5 Hours",
                'wage' => "5,83",
                'when' => "30-5-2022",
                'user' =>"ethel@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Labrador", 
                'kind' => "Hond",
                'image' => "/img/labrador_default.jpg",
                'description' => "A fun Labrador dog who you can watch!",
                'length' => "6 Hours",
                'wage' => "7,32",
                'when' => "31-7-2022",
                'user' =>"admin@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Poedel", 
                'kind' => "Hond",
                'image' => "/img/poedel_default.jpg",
                'description' => "A fun Poedel dog who you can watch!",
                'length' => "13 Hours",
                'wage' => "8,11",
                'when' => "20-3-2022",
                'user' =>"J.deMol@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Boxer", 
                'kind' => "Hond",
                'image' => "/img/boxer_default.jpg",
                'description' => "A fun Boxer dog who you can watch!",
                'length' => "5,5 Hours",
                'wage' => "6,23",
                'when' => "13-7-2022",
                'user' =>"SjakieDV@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Husky", 
                'kind' => "Hond",
                'image' => "/img/husky_default.jpg",
                'description' => "A fun Husky dog who you can watch!",
                'length' => "3 Hours",
                'wage' => "5,91",
                'when' => "6-8-2022",
                'user' =>"GelukG1@gmail.com"
            ]);
        }
    }
}
