<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalitesTable extends Migration
{
    public function up()
    {
        Schema::create('localites', function (Blueprint $table) {
            $table->id('idLocalite');
            $table->unsignedBigInteger('entreprise_id'); // Utilisez unsignedBigInteger pour la clé étrangère
            $table->foreign('entreprise_id')->references('idEntreprise')->on('entreprises')->onDelete('cascade'); // Correction de la référence de clé étrangère            
            $table->string('adresse');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('localites');
    }
}
