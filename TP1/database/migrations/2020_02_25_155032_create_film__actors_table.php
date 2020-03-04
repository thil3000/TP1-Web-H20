<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors_film', function (Blueprint $table) {
            $table->bigInteger('actor_id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('actors');
            
            $table->bigInteger('film_id')->unsigned();
            $table->foreign('film_id')->references('id')->on('films');
            
            $table->datetime('created_at');
            $table->datetime('updated_at')->nullable();
            
            $table->unique(['actor_id','film_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film__actors');
    }
}
