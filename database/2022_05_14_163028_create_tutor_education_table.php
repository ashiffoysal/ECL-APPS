<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_education', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_degree')->nullable();
            $table->string('institution')->nullable();
            $table->string('grade')->nullable();
            $table->string('subject')->nullable();
            
            $table->integer('user_id')->nullable();
            $table->integer('is_verify')->default(0);
            $table->string('image')->nullable();
            $table->string('date')->nullable();
            $table->text('more')->nullable();
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
        Schema::dropIfExists('tutor_education');
    }
}
