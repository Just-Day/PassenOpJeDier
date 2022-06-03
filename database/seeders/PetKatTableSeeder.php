<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetKatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kat_pet_array = ["Pers"];

        foreach($kat_pet_array as $kat){
            DB::table('pet')->insert([
                'name' => "Pers", 
                'kind' => "Kat",
                'image' => "/img/pers_default.jpg",
                'description' => "A great Pers cat who you can keep safe!",
                'length' => "7 Hours",
                'wage' => "8,44",
                'when' => "2-9-2022",
                'user' =>"dayvibingtrans@gmail.com"
                
            ]);

            DB::table('pet')->insert([
                'name' => "Siamees", 
                'kind' => "Kat",
                'image' => "/img/siamees_default.jpg",
                'description' => "A great Siamees cat who you can keep safe!",
                'length' => "4,5 Hours",
                'wage' => "7,32",
                'when' => "5-6-2022",
                'user' =>"ethel@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Bengaal", 
                'kind' => "Kat",
                'image' => "/img/bengaal_default.jpg",
                'description' => "A great Bengaal cat who you can keep safe!",
                'length' => "6,5 Hours",
                'wage' => "6,74",
                'when' => "21-7-2022",
                'user' =>"dayvibingtrans@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Siberisch", 
                'kind' => "Kat",
                'image' => "/img/siberisch_default.jpg",
                'description' => "A great Siberisch cat who you can keep safe!",
                'length' => "6 Hours",
                'wage' => "5,41",
                'when' => "6-9-2022",
                'user' =>"GelukG1@gmail.com"
            ]);
        }
    }
}