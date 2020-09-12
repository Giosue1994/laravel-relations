<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
          $table->id();
          $table->string('title');
          $table->string('genre');
          // creo una colonna senza assegnare un numero all'id
          $table->unsignedBigInteger('album_id');
          $table->timestamps();
          // collego l'id creato ad un altra tabella
          $table->foreign('album_id')
                ->references('id')
                ->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
