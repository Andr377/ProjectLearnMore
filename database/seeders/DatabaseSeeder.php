<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            LectureApprovalSeeder::class,
            CategorySeeder::class,
            CourseSeeder::class,
            CourseCategorySeeder::class,
            CourseMaterialSeeder::class,
            EnrollCourseSeeder::class,
            EnrollCourseDetailSeeder::class,
        ]);
    }
}
