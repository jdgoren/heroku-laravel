<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('duration');
            $table->dateTime('released_at');
            $table->timestamps();
        });

        Schema::create('user_watched_movies', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->primary(['user_id', 'movie_id']);
            $table->timestamps();
        });

        // When this migration is completed, seed the database
        // if the environment equals `production`.
        if(\App::environment('production'))
        {
            \Artisan::call('db:seed', [
                '--force' => true
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_watched_movies');
        Schema::dropIfExists('movies');
    }
}
