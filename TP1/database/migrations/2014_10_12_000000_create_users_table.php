<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login', 50);
            $table->string('password', 255);
            $table->string('email', 50);
            $table->string('last_name', 50);
            $table->string('frist_name', 50);
            $table->bigInteger('role_id')->unsigned();
            
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unique('login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
