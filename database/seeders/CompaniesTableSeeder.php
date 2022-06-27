<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();

        $companies = [];
        foreach(range(1,10) as $index){
            $companies[] = [
                'name'      => "company $index",
                'address'   => "address $index",
                'website'   => "webpate $index",
                'email'     => "email $index",
                'created_at'=> now(),
                'updated_at'=> now()
            ];
        }

        DB::table('companies')->insert($companies);
    }
}
