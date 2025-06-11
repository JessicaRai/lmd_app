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
       Schema::create('composer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiant_inscrit_id');
            $table->foreign('etudiant_inscrit_id')->references('id')->on('etudiant_inscrits')->onDelete('cascade');
            $table->date('date_comp');
            $table->string('statut_comp');
            $table->integer('temps');
            $table->float('note');
            $table->text('obs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composer');
    }
};
