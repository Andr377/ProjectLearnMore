<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroll_course_details', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->float('Rating')->nullable();
            $table->string('RatingDescription')->nullable();
            $table->date('DateEnrolled');
            $table->integer('TotalUsersEnrolled');
            $table->unsignedBigInteger('EnrollCourseId');
            $table->foreign('EnrollCourseId')->references('id')->on('enroll_courses')
                ->onDelete('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('CourseId');
            $table->foreign('CourseId')->references('id')->on('courses')
                ->onDelete('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enroll_course_details');
    }
}
