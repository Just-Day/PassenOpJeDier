<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetKonijnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $konijn_pet_array = ["Hangoor"];

        foreach($konijn_pet_array as $konijn){
            DB::table('pet')->insert([
                'name' => "Hangoor", 
                'kind' => "Konijn",
                'image' => "/img/hangoor_default.jpg",
                'description' => "A fluffy Hangoor bunny who you can feed!",
                'length' => "3.5 Hours",
                'wage' => "6,26",
                'when' => "1-6-2022",
                'user' =>"SjakieDV@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Hollander", 
                'kind' => "Konijn",
                'image' => "/img/hollander_default.jpg",
                'description' => "A fluffy Hollander bunny who you can feed!",
                'length' => "3 Hours",
                'wage' => "7,23",
                'when' => "22-7-2022",
                'user' =>"J.deMol@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Leeuwenkop", 
                'kind' => "Konijn",
                'image' => "/img/leeuwenkop_default.jpg",
                'description' => "A fluffy Leeuwenkop bunny who you can feed!",
                'length' => "10 Hours",
                'wage' => "9,91",
                'when' => "8-8-2022",
                'user' =>"admin@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Californian", 
                'kind' => "Konijn",
                'image' => "/img/californian_default.jpg",
                'description' => "A fluffy Californian bunny who you can feed!",
                'length' => "8 Hours",
                'wage' => "7,48",
                'when' => "3-7-2022",
                'user' =>"admin@gmail.com"
            ]);
        }
    }
}
