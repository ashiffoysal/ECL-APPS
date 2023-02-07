<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesments', function (Blueprint $table) {

            $table->id();
            $table->string('branch')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('email')->nullable();
            $table->longText('child_information')->nullable();
            $table->string('mobile')->nullable();
            $table->string('parent_relation')->nullable();
            $table->text('address')->nullable();
            $table->string('assesment_date_time')->nullable();
            $table->date('date')->nullable();
            $table->text('write_details')->nullable();
            $table->integer('is_deleted')->default(0);
            $table->integer('is_active')->default(1);
            $table->integer('is_present')->default(0);
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
        Schema::dropIfExists('assesments');
    }
}
