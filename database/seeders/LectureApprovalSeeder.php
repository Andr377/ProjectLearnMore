<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecture_approvals')->insert([
            'Approve' => true,
            'RequestDate' => '2021-01-01',
            'ApprovalDate' => '2021-01-05',
            'UserId' => 1,
            'AdminId' => 1
        ]);

        DB::table('lecture_approvals')->insert([
            'Approve' => true,
            'RequestDate' => '2021-01-01',
            'ApprovalDate' => '2021-01-06',
            'UserId' => 2,
            'AdminId' => 2
        ]);

        DB::table('lecture_approvals')->insert([
            'Approve' => false,
            'RequestDate' => '2021-01-01',
            'ApprovalDate' => '2021-01-07',
            'UserId' => 3,
            'AdminId' => 2
        ]);

    }
}
