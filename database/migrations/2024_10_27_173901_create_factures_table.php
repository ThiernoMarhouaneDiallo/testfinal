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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->double("montant_total")->nullable();
            $table->string("mode_paiement");
            $table->foreignId("rendez_vous_id")->constrained("rendez_vous");
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
        Schema::table("factures", function(Blueprint $table){
            $table->dropConstrainedForeignId("rendez_vous_id");
        });
        Schema::table("factures", function(Blueprint $table){
            $table->dropConstrainedForeignId("user_id");
        });
        Schema::dropIfExists('factures');
    }
};
