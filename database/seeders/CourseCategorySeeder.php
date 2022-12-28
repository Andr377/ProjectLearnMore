<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_categories')->insert([
            'CourseId' => 1,
            'CategoryId' => 1
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 1,
            'CategoryId' => 2
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 2,
            'CategoryId' => 3
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 2,
            'CategoryId' => 4
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 3,
            'CategoryId' => 1
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 4,
            'CategoryId' => 2
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 5,
            'CategoryId' => 4
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 6,
            'CategoryId' => 1
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 7,
            'CategoryId' => 2
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 8,
            'CategoryId' => 4
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 8,
            'CategoryId' => 4
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 9,
            'CategoryId' => 2
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 9,
            'CategoryId' => 3
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 10,
            'CategoryId' => 2
        ]);

        DB::table('course_categories')->insert([
            'CourseId' => 10,
            'CategoryId' => 4
        ]);

    }
}
