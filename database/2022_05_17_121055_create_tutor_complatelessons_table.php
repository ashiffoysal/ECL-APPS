<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorComplatelessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_complatelessons', function (Blueprint $table) {
            $table->id();
            $table->string('course_id')->nullable();
            $table->string('subject')->nullable();
            $table->string('tutor_id')->nullable();
            $table->string('student_id')->nullable();
            $table->longText('lesson_complete_details')->nullable();
            $table->longText('query')->nullable();
            $table->string('date')->nullable();
            $table->integer('is_approve')->default(0);
            $table->integer('is_deletd')->default(0);
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
        Schema::dropIfExists('tutor_complatelessons');
    }
}
