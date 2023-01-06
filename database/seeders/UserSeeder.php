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
            'password' => bcrypt('Lol1234'),
            'email' => 'abbeyraa@gmail.com',
            'DOB' => '2002-02-02',
            'JoinDate' => '2020-12-12',
            'IsLecture' => true,
            'Role' => 'member'
        ]);

        DB::table('users')->insert([
            'Username' => 'zelensky',
            'Name' => 'Zelensky',
            'password' => bcrypt('Lol1234'),
            'email' => 'zelensky@gmail.com',
            'DOB' => '2002-02-02',
            'JoinDate' => '2020-12-13',
            'IsLecture' => true,
            'Role' => 'member'
        ]);

        DB::table('users')->insert([
            'Username' => 'hitler_putin',
            'Name' => 'Rasputin',
            'password' => bcrypt('Lol1234'),
            'email' => 'hitler_pustin@gmail.com',
            'DOB' => '2002-02-02',
            'JoinDate' => '2020-12-14',
            'IsLecture' => false,
            'Role' => 'member'
        ]);

        DB::table('users')->insert([
            'Username' => 'joe_biden',
            'Name' => 'Joe Biden',
            'password' => bcrypt('Lol1234'),
            'email' => 'joe_biden@gmail.com',
            'DOB' => '2002-03-02',
            'JoinDate' => '2020-12-14',
            'IsLecture' => false,
            'Role' => 'member'
        ]);

        DB::table('users')->insert([
            'Username' => 'joko_widodo',
            'Name' => 'Joko Widodo',
            'password' => bcrypt('Lol1234'),
            'email' => 'joko_widodo@gmail.com',
            'DOB' => '2002-04-02',
            'JoinDate' => '2020-12-15',
            'IsLecture' => false,
            'Role' => 'member'
        ]);

        DB::table('users')->insert([
            'Username' => 'Admin1',
            'Name' => 'Admin Pertama',
            'password' => bcrypt('admin1ganteng'),
            'email' => 'admin1@gmail.com',
            'DOB' => '2002-04-02',
            'JoinDate' => '2019-12-15',
            'IsLecture' => false,
            'Role' => 'admin'
        ]);

        DB::table('users')->insert([
            'Username' => 'Admin2',
            'Name' => 'Admin Kedua',
            'password' => bcrypt('admin2ganteng'),
            'email' => 'admin2@gmail.com',
            'DOB' => '2002-04-02',
            'JoinDate' => '2019-12-15',
            'IsLecture' => false,
            'Role' => 'admin'
        ]);
    }
}
