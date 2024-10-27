<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->double("Montant_Total")->nullable();
            $table->string("Mode_Paiement");
            $table->foreignId("RendezVous_id")->constrained("rendez_vous");
            $table->foreignId("Utilisateur_id")->constrained("users");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("factures", function(Blueprint $table){
            $table->dropConstrainedForeignId("RendezVous_id");
        });
        Schema::table("factures", function(Blueprint $table){
            $table->dropConstrainedForeignId("Utilisateur_id");
        });
        Schema::dropIfExists('factures');
    }
};
