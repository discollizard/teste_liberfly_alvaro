<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate one test user
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'testealvaro@liberfly.com',
            'password' => Hash::make('password'), // or use $faker->password for random passwords
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Generate 3 dummy users
        for ($i = 0; $i < 3; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'), // or use $faker->password for random passwords
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
