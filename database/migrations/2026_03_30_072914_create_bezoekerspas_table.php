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
    Schema::create('bezoekerspas', function (Blueprint $table) {
        $table->id('idBezoekerspas'); // De PK uit je diagram
        $table->integer('nummer');
        $table->timestamps(); // Handig om te zien wanneer de pas is aangemaakt
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bezoekerspas');
    }
};
