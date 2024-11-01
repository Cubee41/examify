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
        Schema::create('epreuve_user', function (Blueprint $table) {
            $table->id();
        $table->foreignId('etudiant_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('epreuve_id')->constrained()->onDelete('cascade');
        $table->json('reponses'); // Réponses de l'étudiant sous forme de JSON ici les clés 
        $table->float('note')->nullable(); // Calculée après soumission des réponses
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_user');
    }
};
