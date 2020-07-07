<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits',function(Blueprint $table){
            $table->increments('id');
            $table->string('titre');
            $table->string('description');
            $table->integer('prix');
            $table->integer('stockI');
            $table->integer('vente_id')->nullable();
            $table->integer('stockA')->nullable()->unsigned();
            $table->text('photo');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('produits');
    }
}
