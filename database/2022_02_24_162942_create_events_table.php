<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('details')->nullable();
            $table->date('date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('price')->nullable();

            $table->string('total_slot')->nullable();
            $table->string('fillup_slot')->nullable();
            $table->longText('address')->nullable();
            $table->longText('google_map')->nullable();
            $table->string('tags')->nullable();
            $table->string('image')->nullable();

            $table->integer('is_deleted')->default(0);
            $table->integer('status')->default(1);
            $table->string('deleted_by')->nullable();
            $table->string('updated_by')->nullable();

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
        Schema::dropIfExists('events');
    }
}
