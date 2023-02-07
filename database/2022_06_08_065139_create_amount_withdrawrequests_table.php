<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountWithdrawrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amount_withdrawrequests', function (Blueprint $table) {
            $table->id();

            $table->string('tutor_id')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->float('amount')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_address')->nullable();
            $table->text('details')->nullable();
            $table->text('transection_details')->nullable();
            $table->integer('is_paid')->default(0);
            $table->integer('is_approve')->default(0);
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
        Schema::dropIfExists('amount_withdrawrequests');
    }
}
