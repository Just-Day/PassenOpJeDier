<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetVisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vis_pet_array = ["Guppy"];

        foreach($vis_pet_array as $vis){
            DB::table('pet')->insert([
                'name' => "Guppy", 
                'kind' => "Vis",
                'image' => "/img/guppy_default.jpg",
                'description' => "A great Guppy fish who you can see!",
                'length' => "12 Hours",
                'wage' => "10,82",
                'when' => "19-9-2022",
                'user' =>"ethel@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Goudvis", 
                'kind' => "Vis",
                'image' => "/img/goudvis_default.jpg",
                'description' => "A great Goudvis fish who you can see!",
                'length' => "8 Hours",
                'wage' => "9,28",
                'when' => "16-7-2022",
                'user' =>"dayvibingtrans@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Karper", 
                'kind' => "Vis",
                'image' => "/img/karper_default.jpg",
                'description' => "A great Karper fish who you can see!",
                'length' => "7,5 Hours",
                'wage' => "8,88",
                'when' => "16-8-2022",
                'user' =>"admin@gmail.com"
            ]);

            DB::table('pet')->insert([
                'name' => "Blobvis", 
                'kind' => "Vis",
                'image' => "/img/blobvis_default.jpg",
                'description' => "A great Blobvis fish who you can see!",
                'length' => "6,5 Hours",
                'wage' => "8,35",
                'when' => "2-9-2022",
                'user' =>"J.deMol@gmail.com"
            ]);
        }
    }
}
