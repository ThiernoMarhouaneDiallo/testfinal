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
        Schema::create('historique__notifications', function (Blueprint $table) {
            $table->id();
            $table->string("Contenu");
            $table->string("Type_Notification");
            $table->string("Statut");
            $table->foreignId("Client_id")->constrained("clients");
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
        Schema::table("historique__notifications", function(Blueprint $table){
            $table->dropConstrainedForeignId("Client_id");
        });
        Schema::dropIfExists('historique__notifications');
    }
};
