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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->double("Montant_Total")->nullable();
            $table->foreignId("Produit_id")->constrained("produits");
            $table->foreignId("utilisateur_id")->constrained("users");
            
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
        Schema::table("ventes", function(Blueprint $table){
            $table->dropConstrainedForeignId("Produit_id");
        });
        Schema::table("ventes", function(Blueprint $table){
            $table->dropConstrainedForeignId("utilisateur_id");
        });
        Schema::dropIfExists('ventes');
    }
};
