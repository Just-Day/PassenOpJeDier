<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $images_array = ['appartement_katwijk.jpg', 'appartement_leiden.jpg', 'appartement_noordwijk.jpg', 'appartement_voorhout.jpg', 'huis_leiden.jpg', 'huis_noordwijk.jpg', 'huis_katwijk.jpg', 'huis_voorhout.jpg', 'studio_leiden.jpg', 'studio_noordwijk.jpg', 'studio_katwijk.jpg', 'studio_voorhout.jpg', 'bengaal_default.jpg', 'blobvis_default.jpg', 'boxer_default.jpg', 'bulldog_default.jpg', 'californian_default.jpg', 'goudvis_default.jpg', 'guppy_default.jpg', 'hangoor_default.jpg', 'hollander_default.jpg', 'husky_default.jpg', 'kanarie_default.jpg', 'karper_default.jpg', 'labrador_default.jpg', 'leeuwenkop_default.jpg', 'papegaai_default.jpg', 'parkiet_default.jpg', 'pers_default.jpg', 'poedel_default.jpg', 'siamees_default.jpg', 'siberisch_default.jpg'];
            foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/img/' . $image
            ]);
        }
    }
}
