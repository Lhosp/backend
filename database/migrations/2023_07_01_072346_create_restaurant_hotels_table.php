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
        Schema::create('restaurant_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('nbCouvert');
            $table->integer('nbService');
            $table->boolean('petitDej');
            $table->string('fourchette_prix');
            $table->foreignId('hotel_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_hotels');
    }
};
