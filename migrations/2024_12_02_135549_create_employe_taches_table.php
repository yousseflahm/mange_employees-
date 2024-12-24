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
        Schema::create('employe_taches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employe_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tache_id')->constrained()->cascadeOnDelete();
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('realisation');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employe_taches');
    }
};
