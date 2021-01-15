<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->nullable()->comment('Name of movie');
            $table->integer('year')->nullable()->comment('Year of movie');
            $table->string('synopses')->nullable()->comment('Synopses of movie');
            $table->string('duration')->nullable()->comment('Duration of movie');
            $table->string('directors')->nullable()->comment('Directors of movie');
            $table->string('writers')->nullable()->comment('Writers of movie');
            $table->string('stars')->nullable()->comment('Stars of movie');
            $table->double('rating')->nullable()->comment('Rating of movie');
            $table->string('image')->nullable()->comment('Image path of movie');

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
        Schema::dropIfExists('movies');
    }
}
