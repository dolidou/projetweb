<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreStagesTable extends Migration
{
    public function up()
    {
        Schema::create('offre_stages', function (Blueprint $table) {
            $table->id('idOffreStage');
            $table->unsignedBigInteger('entreprise_id'); // Utilisez unsignedBigInteger pour la clé étrangère
            $table->foreign('entreprise_id')->references('idEntreprise')->on('entreprises')->onDelete('cascade'); // Correction de la référence de clé étrangère            
            $table->string('adresse');            
            $table->string('competences');
            $table->string('localite');
            $table->string('typesPromotionsConcernes');
            $table->integer('dureeStage');
            $table->decimal('baseRemuneration', 10, 2);
            $table->date('dateOffre');
            $table->integer('placesOffertes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offre_stages');
    }
}
