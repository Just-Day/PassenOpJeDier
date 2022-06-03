<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'user' => "dayvibingtrans@gmail.com", 
            'review' => "Very fun pet to have around!",
            'id' => "1"
        ]);

        DB::table('review')->insert([
            'user' => "ethel@gmail.com", 
            'review' => "Awesome experience caring for them!",
            'id' => "2"
        ]);

        DB::table('review')->insert([
            'user' => "GelukG1@gmail.com", 
            'review' => "Delightful to watch over",
            'id' => "3"
        ]);

        DB::table('review')->insert([
            'user' => "SjakieDV@gmail.com", 
            'review' => "Very playful and neat to see",
            'id' => "4"
        ]);

        DB::table('review')->insert([
            'user' => "J.deMol@gmail.com", 
            'review' => "Bit busy at times, but overall okay",
            'id' => "5"
        ]);


    }
}
