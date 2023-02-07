<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatementsOfEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statements_of_entries', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id')->nullable();
            $table->string('candidate_id')->nullable();
            $table->string('exam_board_name')->nullable();
            $table->string('file')->nullable();
            $table->string('uploads_date')->nullable();
            $table->string('uploads_by')->nullable();
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
        Schema::dropIfExists('statements_of_entries');
    }
}
