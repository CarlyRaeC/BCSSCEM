<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sport');
            $table->boolean('boy')->default(false);
            $table->boolean('girl')->default(false);
            $table->boolean('coed')->default(false);
            $table->boolean('1a')->default(false);
            $table->boolean('2a')->default(false);
            $table->boolean('3a')->default(false);
            $table->boolean('4a')->default(false);
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
        Schema::dropIfExists('sports');
    }
}
