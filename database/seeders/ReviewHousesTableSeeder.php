<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewHousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_houses')->insert([
            'user' => "dayvibingtrans@gmail.com", 
            'review' => "Very fun place for my pet!",
            'id' => "1"
        ]);

        DB::table('review_houses')->insert([
            'user' => "ethel@gmail.com", 
            'review' => "Pleasant place, a good vibe",
            'id' => "2"
        ]);

        DB::table('review_houses')->insert([
            'user' => "GelukG1@gmail.com", 
            'review' => "Trustful for anyone",
            'id' => "3"
        ]);
    }
}
