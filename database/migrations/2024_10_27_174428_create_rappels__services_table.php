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
        Schema::create('rappels__services', function (Blueprint $table) {
            $table->id();
            $table->string("Type_Service");
            $table->foreignId("Vehicule_id")->constrained("vehicules");
           
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
        Schema::table("rappels__services", function(Blueprint $table){
            $table->dropConstrainedForeignId("Vehicule_id");
        });
        Schema::dropIfExists('rappels__services');
    }
};
