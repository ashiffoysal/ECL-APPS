<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTutorRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tutor_requests', function (Blueprint $table) {
            $table->id();
            $table->string('tutor_for',30)->nullable();
            $table->string('subject',30)->nullable();
            $table->integer('student_id')->nullable();
            $table->integer('tutor_id')->nullable();
            $table->date('pick_date')->nullable();
            $table->string('lessons_type',30)->nullable();
            $table->string('exam_board',30)->nullable();
            $table->integer('is_deleted')->default(0);
            $table->integer('is_approve')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('student_tutor_requests');
    }
}
