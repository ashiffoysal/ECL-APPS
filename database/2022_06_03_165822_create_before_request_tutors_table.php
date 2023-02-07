<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeforeRequestTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('before_request_tutors', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('tutor_id')->nullable();
            $table->string('tutor_for')->nullable();
            $table->string('subject')->nullable();
            $table->string('level')->nullable();
            $table->string('lessons_type')->nullable();
            $table->string('exam_board')->nullable();
            $table->date('pick_date')->nullable();
            $table->string('pick_time')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('total_hour')->nullable();
            $table->float('hourly_rate')->nullable();
            $table->float('total_amount')->nullable();
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
        Schema::dropIfExists('before_request_tutors');
    }
}
