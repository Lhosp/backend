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
        $clientType=['P','E'];
        Schema::create('clients', function (Blueprint $table) use ($clientType) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->enum('type', $clientType);
            $table->string('tva_number')->nullable();
            $table->string('tva');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
