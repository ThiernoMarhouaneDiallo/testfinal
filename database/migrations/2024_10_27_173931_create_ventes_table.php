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
            $table->double("montant_Total")->nullable();
            $table->foreignId("produit_id")->constrained("produits");
            $table->foreignId("user_id")->constrained("users");
            
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
            $table->dropConstrainedForeignId("produit_id");
        });
        Schema::table("ventes", function(Blueprint $table){
            $table->dropConstrainedForeignId("user_id");
        });
        Schema::dropIfExists('ventes');
    }
};
