<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_confirmations', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_id')->nullable();
            $table->string('booking_id')->nullable();
            $table->string('exam_id')->nullable();
            $table->string('exam_type')->nullable();
            $table->string('exam_date')->nullable();
            $table->string('exam_time')->nullable();
            $table->string('exam_branch')->nullable();
            $table->longText('details')->nullable();
            $table->longText('requirments')->nullable();
            $table->longText('rescheduling')->nullable();
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
        Schema::dropIfExists('candidate_confirmations');
    }
}
