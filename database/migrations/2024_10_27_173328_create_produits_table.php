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
            $table->string("nom_produit");
            $table->string("reference");
            $table->double("quantite_en_stock")->nullable();
            $table->double("prix_unitaire")->nullable();
            $table->foreignId("categorie_produit_id")->constrained("categorie_produits");
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
            $table->dropConstrainedForeignId("categorie_produit_id");
        });
        Schema::dropIfExists('produits');
    }
};
