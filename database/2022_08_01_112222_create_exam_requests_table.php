<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('photo_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('uci')->nullable();
            $table->string('uci_number')->nullable();
            $table->string('uln')->nullable();
            $table->string('uln_number')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('exam_information')->nullable();
            $table->string('exam_board')->nullable();
            $table->string('exam_series')->nullable();
            $table->string('type')->nullable();
            $table->string('subject')->nullable();
            $table->string('unit_code')->nullable();
            $table->string('option_code')->nullable();
            $table->string('fees')->nullable();
            $table->string('retaking_exams')->nullable();
            $table->string('retaking_exams_name')->nullable();
            $table->string('caring_forwad')->nullable();
            $table->string('caring_forwad_details')->nullable();
            $table->string('special_acces')->nullable();
            $table->string('special_acces_evidence')->nullable();
            $table->string('mental_conditions')->nullable();
            $table->string('mental_condition_details')->nullable();
            $table->string('condition_disability')->nullable();
            $table->string('condition_disability_details')->nullable();
            $table->string('relationship')->nullable();
            $table->string('relation_name')->nullable();
            $table->string('todays_date')->nullable();
            $table->string('payment_option')->nullable();
            $table->integer('status')->default(0);
            $table->integer('is_deleted')->default(1);
           
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
        Schema::dropIfExists('exam_requests');
    }
}
