<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentfeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('tutor_id')->nullable();
            $table->string('star')->nullable();
            $table->text('details')->nullable();
            $table->string('course_id')->nullable();
            $table->string('order_id')->nullable();
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
        Schema::dropIfExists('studentfeedbacks');
    }
}
