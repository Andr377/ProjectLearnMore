<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'CategoryName' => 'Programming'
        ]);

        DB::table('categories')->insert([
            'CategoryName' => 'Finance & Accounting'
        ]);

        DB::table('categories')->insert([
            'CategoryName' => 'Business'
        ]);

        DB::table('categories')->insert([
            'CategoryName' => 'Design'
        ]);

    }
}
