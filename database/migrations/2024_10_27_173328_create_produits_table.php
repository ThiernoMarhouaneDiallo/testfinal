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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string("Nom_Produit");
            $table->string("Reference");
            $table->double("Quantite_En_Stock")->nullable();
            $table->double("Prix_Unitaire")->nullable();
            $table->foreignId("Categorie_Produit_id")->constrained("categorie_produits");
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
        Schema::table("produits", function(Blueprint $table){
            $table->dropConstrainedForeignId("Categorie_Produit_id");
        });
        Schema::dropIfExists('produits');
    }
};
