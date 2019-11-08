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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->decimal('imdb', 3, 1); //se nao for, meto o integer
            $table->string('image');
            //$table->integer('year');
            $table->year('year');
            $table->date('releaseDate');
            $table->timestamp('revisted_at')->nullable();
            //Foreign Keys
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('language_id')->unsigned();
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('diretor_id')->unsigned()->nullable();
            $table->bigInteger('star1_id')->unsigned()->nullable();
            $table->bigInteger('star2_id')->unsigned()->nullable();
            $table->bigInteger('star3_id')->unsigned()->nullable();
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
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
