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
    Schema::create('receptionists', function (Blueprint $table) {
        $table->id('idReceptionist'); // De PK uit je diagram
        $table->string('naam');       // We maken hier tekst van ipv 'int'
        $table->string('email')->unique(); // Nodig voor inloggen
        $table->string('password');        // Nodig voor inloggen
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receptionists');
    }
};
