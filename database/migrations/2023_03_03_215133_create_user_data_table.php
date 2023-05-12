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
        Schema::create('user_data', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('password');
            $table->string('date_of_the_creation_of_the_account')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
            $table->bigInteger('subscriptions')->unsigned();
            $table->foreign('subscriptions')->references('id')->on('sub_communities')->
                    onDelete('cascade')->onUpdate('cascade');


        });
        }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};