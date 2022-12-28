<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Username' => 'abbeyraa',
            'Name' => 'Abby Rasya',
            'Password' => 'Lol1234',
            'Email' => 'abbeyraa@gmail.com',
            'DOB' => '2002-02-02',
            'JoinDate' => '2020-12-12',
            'IsLecture' => true
        ]);

        DB::table('users')->insert([
            'Username' => 'zelensky',
            'Name' => 'Zelensky',
            'Password' => 'Lol1234',
            'Email' => 'zelensky@gmail.com',
            'DOB' => '2002-02-02',
            'JoinDate' => '2020-12-13',
            'IsLecture' => true
        ]);

        DB::table('users')->insert([
            'Username' => 'hitler_putin',
            'Name' => 'Rasputin',
            'Password' => 'Lol1234',
            'Email' => 'hitler_pustin@gmail.com',
            'DOB' => '2002-02-02',
            'JoinDate' => '2020-12-14',
            'IsLecture' => false
        ]);

        DB::table('users')->insert([
            'Username' => 'joe_biden',
            'Name' => 'Joe Biden',
            'Password' => 'Lol1234',
            'Email' => 'joe_biden@gmail.com',
            'DOB' => '2002-03-02',
            'JoinDate' => '2020-12-14',
            'IsLecture' => false
        ]);

        DB::table('users')->insert([
            'Username' => 'joko_widodo',
            'Name' => 'Joko Widodo',
            'Password' => 'Lol1234',
            'Email' => 'joko_widodo@gmail.com',
            'DOB' => '2002-04-02',
            'JoinDate' => '2020-12-15',
            'IsLecture' => false
        ]);
    }
}
