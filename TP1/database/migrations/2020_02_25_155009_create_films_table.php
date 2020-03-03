<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50);
            $table->string('release_year', 4);
            $table->integer('length');
            $table->string('description');
            $table->string('rating', 5);
            $table->bigInteger('langage_id')->unsigned();
            $table->foreign('langage_id')->references('id')->on('langages');
            $table->string('special_features', 200);
            $table->string('image', 40);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
