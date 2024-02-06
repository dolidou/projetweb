<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotePromotionsTable extends Migration
{
    public function up()
    {
        Schema::create('pilote_promotions', function (Blueprint $table) {
            $table->id('idPilotePromotion');
            $table->string('nom');
            $table->string('prenom');
            $table->string('centre');
            $table->unsignedBigInteger('user_id'); // Utilisez unsignedBigInteger pour la clé étrangère
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Correction de la référence de clé étrangère            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pilote_promotions');
    }
}
