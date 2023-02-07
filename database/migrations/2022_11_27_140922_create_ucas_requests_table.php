<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcasRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucas_requests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->text('address_line_one')->nullable();
            $table->text('address_line_two')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('mock_exam_type')->nullable();
            $table->longText('exam_subject_details')->nullable();
            $table->string('review_personal_statement')->nullable();
            $table->string('application_support')->nullable();
            $table->longText('application_support_details')->nullable();
            $table->text('recent_photo')->nullable();
            $table->text('photo_id')->nullable();
            $table->string('name')->nullable();
            $table->text('signature')->nullable();
            
            $table->text('payment_option')->nullable();
            $table->text('transaction_id')->nullable();
            
            $table->integer('is_paid_verify')->default(0);
            $table->integer('is_paid')->default(0);
            $table->integer('is_seen')->default(0);
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
        Schema::dropIfExists('ucas_requests');
    }
}
