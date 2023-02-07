<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('exam_type')->nullable();
            $table->string('subject_name')->nullable();
            $table->string('unit_code')->nullable();
            $table->integer('is_practical')->nullable();
            $table->float('practical_fees')->nullable();
            $table->float('exam_fees')->nullable();
            $table->float('late_fees')->nullable();
            $table->float('high_late_fees')->nullable();
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
        Schema::dropIfExists('subjects');
    }
}
