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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('contenu_question'); // Texte de la question
            $table->json('choix_reponses'); // Options de réponse sous forme de JSON
            $table->string('reponse_correcte'); // Indice de la bonne réponse
            $table->string('lien_fichier_pdf')->nullable(); // Chemin du fichier PDF chargé
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
