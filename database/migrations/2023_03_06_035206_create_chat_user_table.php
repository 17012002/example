<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chat_user', function (Blueprint $table) {
            $table->primary(['user_id','chatter_id']);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('chatter_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user_data')->
                onDelete('cascade')->onUpdate('cascade');

            $table->foreign('chatter_id')->references('id')->on('chat_users')->
                onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_user');
    }
};
