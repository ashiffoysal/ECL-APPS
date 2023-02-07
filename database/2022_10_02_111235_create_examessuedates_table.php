<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamessuedatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examessuedates', function (Blueprint $table) {
            $table->id();
            $table->string('exam_name')->nullable();
            $table->string('entry_dateline')->nullable();
            $table->string('entry_latefees')->nullable();
            $table->string('entry_highlatefees')->nullable();
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
        Schema::dropIfExists('examessuedates');
    }
}
