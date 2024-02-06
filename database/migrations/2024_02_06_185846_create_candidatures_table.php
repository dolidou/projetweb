<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id('idCandidature');
            $table->unsignedBigInteger('offre_stage_id'); // Utilisez unsignedBigInteger pour la clé étrangère
            $table->foreign('offre_stage_id')->references('idOffreStage')->on('offre_stages')->onDelete('cascade'); // Correction de la référence de clé étrangère            
            $table->unsignedBigInteger('etudiant_id'); // Utilisez unsignedBigInteger pour la clé étrangère
            $table->foreign('etudiant_id')->references('idEtudiant')->on('etudiants')->onDelete('cascade'); // Correction de la référence de clé étrangère            
            $table->text('lettreMotivation');
            $table->string('cv');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
}
