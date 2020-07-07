<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes',function(Blueprint $table){
            $table->increments('id');
            $table->integer('quantite');
            $table->integer('somme');
            $table->integer('stockA')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
            $table->integer('user_id')->index();
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
        Schema::dropIfExists('ventes');
    }
}
