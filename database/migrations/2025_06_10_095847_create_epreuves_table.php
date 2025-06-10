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
        Schema::create('epreuves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professeur_id')->constrained('professeurs');
            $table->foreignId('matiere_id')->constrained('matieres');
            $table->foreignId('annee_id')->constrained('annees');
            $table->string('titre');
            $table->text('description')->nullable();
            $table->enum('type_ep', ['qcm', 'qo']);
            $table->enum('statut_ep', ['en attente', 'validée', 'refusée'])->default('en attente');
            $table->date('date_ep');
            $table->time('heure_deb');
            $table->time('heure_fin');
            $table->integer('duree'); // en minutes
            $table->boolean('notation_auto')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epreuves');
    }
};
