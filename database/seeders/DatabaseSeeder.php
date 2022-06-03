<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ImagesTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class, 
            KindOfPetTableSeeder::class,
            PetHondTableSeeder::class,
            PetKatTableSeeder::class,
            PetKonijnTableSeeder::class,
            PetVisTableSeeder::class,
            PetVogelTableSeeder::class,
            KindOfHousesTableSeeder::class,
            HouseAppartementTableSeeder::class,
            HouseHuisTableSeeder::class,
            HouseStudioTableSeeder::class,
            ReviewTableSeeder::class,
            ReviewHousesTableSeeder::class,
            ApplicationHousesTableSeeder::class,
            ApplicationPetTableSeeder::class,
        ]);
    }
}
