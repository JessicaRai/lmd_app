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
            $table->unsignedBigInteger('professeur_inscrit_id');
            $table->foreign('professeur_inscrit_id')->references('id')->on('professeur_inscrits')->onDelete('cascade');
            $table->string('titre');
            $table->date('date_ep');
            $table->string('statut_ep');
            $table->time('heureDeb');
            $table->time('heureFin');
            $table->integer('duree');
            $table->text('description');
            $table->string('notation');
            $table->string('type_ep');
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
