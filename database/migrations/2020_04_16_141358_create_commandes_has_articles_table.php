<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesHasArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes_has_articles', function (Blueprint $table) {
            $table->id();
            $table->string('quantité',255);
            $table->timestamps();

            $table->bigInteger('id_articles')->unsigned();
            $table->foreign('id_articles')->references('id')->on('articles');

            $table->bigInteger('id_commandes')->unsigned();
            $table->foreign('id_commandes')->references('id')->on('commandes');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes_has_articles');
    }
}