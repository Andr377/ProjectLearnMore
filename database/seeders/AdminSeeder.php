<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'Username' => 'Admin1',
            'Password' => 'admin1ganteng'
        ]);

        DB::table('admins')->insert([
            'Username' => 'Admin2',
            'Password' => 'admin2ganteng'
        ]);
    }
}
