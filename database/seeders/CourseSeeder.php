<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'CourseTitle' =>  'Become A Programming Pro: The Ultimate Course',
            'CourseDescription' => 'Learn how to program and get to grips with the most commonly used languages. This course will be in java.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 1
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'Live Programming Course: Beginner To Pro',
            'CourseDescription' => 'Learn the basics of programming, Python, HTML, CSS, and JavaScript.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 2
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'The Complete Programming Certification Course',
            'CourseDescription' => 'Learn how to make the most of your online courses by using Amazon Web Services.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 1
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'Learn Programming From Scratch',
            'CourseDescription' => 'Learn how to code with Python and build your first app. This hands-on book teaches programming concepts as you build a complete calculator.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 1
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'Zero To Hero In Programming: Complete Programming Guide',
            'CourseDescription' => 'Learn to code. Programming is a great way to learn computer programming and make life simpler. This article will give you some examples of the most common programming languages.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 2
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'Programming Foundations Course - Learn The Essentials',
            'CourseDescription' => 'Learn programming concepts in Java, C#, C++, Python, and other languages with this project based course.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 2
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'Zero To Hero In Finance: Complete Finance Guide',
            'CourseDescription' => 'Learn about general finance, investing, and banking. Find out about personal finance, budgeting, and saving money.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 2
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'Finance 101: A Beginners Guide To Finance',
            'CourseDescription' => 'The first step in any financial planning is finding out how much you can afford. This calculator will tell you how much money you can comfortably spend each month.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 1
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'How To Master Finance In 30 Days',
            'CourseDescription' => 'This is a great deal of information, but if you follow it, you will be a successful investor.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 2
        ]);

        DB::table('courses')->insert([
            'CourseTitle' =>  'Marketing Masterclass: Beginners To Advanced',
            'CourseDescription' => 'Lecture 3: The Tax Code: Your Complete Guide for 2016. Learn about the history of the tax code, the fundamentals of filing taxes and how the tax code has changed over the years.',
            'RatingAvg' => 3.5,
            'CreatedDate' => '2021-01-03',
            'LectureId' => 1
        ]);
    }
}
