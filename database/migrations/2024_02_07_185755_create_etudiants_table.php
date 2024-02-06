<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('idEtudiant');
            $table->string('nom');
            $table->string('prenom');
            $table->string('centre');
            $table->integer('promotion');
            $table->unsignedBigInteger('user_id'); // Utilisez unsignedBigInteger pour la clé étrangère
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Correction de la référence de clé étrangère            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
