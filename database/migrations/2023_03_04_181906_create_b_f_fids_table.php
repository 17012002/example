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
        Schema::create('b_f_fids', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('bff_bracelet_id');
            $table->string('name');
            $table->string('password');
            $table->string('date_of_the_creation_of_the_account')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user_data')->
                    onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_f_fids');
    }
};
