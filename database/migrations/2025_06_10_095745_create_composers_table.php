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
        Schema::create('composers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('epreuve_id')->constrained('epreuves');
            $table->foreignId('etudiant_id')->constrained('etudiants');
            $table->date('date_comp');
            $table->enum('statut_comp', ['en cours', 'terminé'])->default('en cours');
            $table->decimal('note', 5, 2)->nullable();
            $table->integer('temps')->nullable(); // temps en secondes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composers');
    }
};
