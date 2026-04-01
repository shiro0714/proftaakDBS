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
    Schema::create('bezoekers', function (Blueprint $table) {
        $table->id('idBezoeker');
        $table->string('naam', 254);
        $table->string('bedrijf', 254);
        $table->timestamp('aankomst');
        $table->timestamp('vertrek')->nullable(); // De 'N' in je diagram betekent nullable
        
        // De koppelingen (Foreign Keys)
        $table->unsignedBigInteger('idReceptionist');
        $table->unsignedBigInteger('idBezoekerspas');
        
        $table->timestamps();

        // Dit zorgt voor de lijntjes in je diagram (Foreign Keys)
        $table->foreign('idReceptionist')->references('idReceptionist')->on('receptionists');
        $table->foreign('idBezoekerspas')->references('idBezoekerspas')->on('bezoekerspas');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bezoekers');
    }

    
};
