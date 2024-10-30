<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**ID_Vehicule INT PRIMARY KEY AUTO_INCREMENT,
      * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string("numero_immatriculation");
            $table->string("marque");
            $table->string("modele");
            $table->double("annee")->nullable();
            $table->foreignId("client_id")->constrained("clients");
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
        Schema::table("vehicules", function(Blueprint $table){
            $table->dropConstrainedForeignId("client_id");
        });
        Schema::dropIfExists('vehicules');
    }
};
