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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("Nom_Service");
            $table->string("Descriptione");
            $table->double("Prix")->nullable();
            $table->foreignId("Categorie_Service_id")->constrained("categorie_services");
          
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
        Schema::table("services", function(Blueprint $table){
            $table->dropConstrainedForeignId("Categorie_Service_id");
        });
        Schema::dropIfExists('services');
    }
};
