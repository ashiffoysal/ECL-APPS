<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGcseExamConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcse_exam_confirmations', function (Blueprint $table) {
            $table->id();
            $table->string('exam_id')->nullable();
            $table->string('booking_id')->nullable();
            $table->string('candidate_id')->nullable();
            $table->string('exam_series')->nullable();
            $table->string('exam_subject')->nullable();
            $table->string('exam_board')->nullable();
            $table->longText('exam_details')->nullable();
            $table->string('entry_by')->nullable();
            $table->string('entry_date')->nullable();
            $table->integer('is_deleted')->default(0);
            
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
        Schema::dropIfExists('gcse_exam_confirmations');
    }
}
