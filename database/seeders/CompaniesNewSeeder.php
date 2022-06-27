<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [];
        $faker = Faker::create();

        foreach( range(1, 10) as $index ){
            $companies[] = [
                'name'      => $faker->company,
                'address'   => $faker->address,
                'website'   => $faker->website,
                'email'     => $faker->email,
                'create_at' => now(),
                'update_at' => now()
            ];
        }
    }
}
