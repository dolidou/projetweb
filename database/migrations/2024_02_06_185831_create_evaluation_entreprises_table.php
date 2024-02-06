<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationEntreprisesTable extends Migration
{
    public function up()
    {
        Schema::create('evaluation_entreprises', function (Blueprint $table) {
            $table->id('idEvaluationEntreprise');
            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')->references('idEntreprise')->on('entreprises')->onDelete('cascade');
            $table->unsignedBigInteger('id_user');
            $table->string('type_evaluation'); // Colonne pour indiquer le type d'évaluation (pilote de promotion ou étudiant)
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade'); // Ajout de la contrainte de clé étrangère pour l'utilisateur
            $table->integer('evaluation'); // Colonne pour stocker l'évaluation
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluation_entreprises');
    }
}
