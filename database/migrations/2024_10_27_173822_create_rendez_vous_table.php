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
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->foreignId("service_id")->constrained("services");
            $table->foreignId("produit_id")->constrained("produits");
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
        Schema::table("rendez_vous", function(Blueprint $table){
            $table->dropConstrainedForeignId("service_id");
        });
        Schema::table("rendez_vous", function(Blueprint $table){
            $table->dropConstrainedForeignId("produit_id");
        });
        Schema::dropIfExists('rendez_vous');
    }
};
