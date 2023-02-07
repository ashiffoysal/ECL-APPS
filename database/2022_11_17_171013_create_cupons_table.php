<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {
            $table->id();
            $table->string('custom_cupon_code')->nullable();
            $table->string('custom_cupon_percent')->nullable();
            $table->string('custom_cupon_status')->nullable();

            $table->string('global_cupon_code')->nullable();
            $table->string('global_cupon_percent')->nullable();
            $table->string('global_cupon_status')->nullable();
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
        Schema::dropIfExists('cupons');
    }
}
