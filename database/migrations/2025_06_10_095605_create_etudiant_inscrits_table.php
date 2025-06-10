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
        Schema::create('etudiant_inscrits', function (Blueprint $table) {
            $table->id('id_etudiantins'); // Correspond à l'id de l'étudiant
            $table->date('date_inscription');
            $table->integer('annee_inscription');
            $table->string('statut')->default('actif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_inscrits');
    }
};
