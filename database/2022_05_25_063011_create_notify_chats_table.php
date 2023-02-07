<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifyChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notify_chats', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->longText('message')->nullable();
            $table->integer('user_is_seen')->default(0);
            $table->integer('admin_is_seen')->default(0);
            $table->integer('is_deleted')->default(0);
            $table->integer('is_admin_send')->default(0);
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
        Schema::dropIfExists('notify_chats');
    }
}
