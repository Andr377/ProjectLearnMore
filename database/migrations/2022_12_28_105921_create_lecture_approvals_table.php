<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_approvals', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->boolean('Approve');
            $table->date('RequestDate');
            $table->date('ApprovalDate');
            $table->unsignedBigInteger('UserId');
            $table->foreign('UserId')->references('id')->on('users')
            ->onDelete('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('AdminId');
            $table->foreign('AdminId')->references('id')->on('admins')
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
        Schema::dropIfExists('lecture_approvals');
    }
}
