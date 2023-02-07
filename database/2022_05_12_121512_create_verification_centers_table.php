<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification_centers', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->nullable();
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
        Schema::dropIfExists('verification_centers');
    }
}
