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

        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->double("Quantite")->nullable();
            $table->double("Seuil_Minimum")->nullable();
            $table->foreignId("Produit_id")->constrained("produits");
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
        Schema::table("stocks", function(Blueprint $table){
            $table->dropConstrainedForeignId("Produit_id");
        });
        Schema::dropIfExists('stocks');
    }
};
