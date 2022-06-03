<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Day van Weeren", 
            'email' => "dayvibingtrans@gmail.com",
            'password' => bcrypt('1234'),
            'age' => 20, 
        ]);

        DB::table('users')->insert([
            'name' => "Ethel van Weeren", 
            'email' => "ethel@gmail.com",
            'password' => bcrypt('12345'),
            'age' => 15, 
        ]);

        DB::table('users')->insert([
            'name' => "admin", 
            'email' => "admin@gmail.com",
            'password' => bcrypt('admin'),
            'age' => 33, 
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => "John de Mol", 
            'email' => "J.deMol@gmail.com",
            'password' => bcrypt('pizza'),
            'age' => 25, 
        ]);

        DB::table('users')->insert([
            'name' => "Sjaak de Vries", 
            'email' => "SjakieDV@gmail.com",
            'password' => bcrypt('Sjak123'),
            'age' => 25, 
        ]);

        DB::table('users')->insert([
            'name' => "Guus Geluk", 
            'email' => "GelukG1@gmail.com",
            'password' => bcrypt('geld'),
            'age' => 25, 
        ]);

    }
}



