<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommlivreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commlivreurs', function (Blueprint $table) {
            $table->id();
            $table->integer('nom_client');
            $table->integer('address_client');
            $table->integer('nom_livreur');
            $table->integer('commande');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commlivreurs');
    }
}
