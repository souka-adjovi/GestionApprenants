<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateNaissance');
            $table->string('villeDorigin');
            $table->string('formation');
            $table->string('etablissementPrecedent');
            $table->integer('telephone');
            $table->string('email');
            $table->string('genre');
            $table->string('photo');
            $table->integer('id_tuteur')->lenght(10)->unsigned();
            $table->foreign('id_tuteur')->references('id_tuteur')->on('tuteur');
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
        Schema::dropIfExists('apprenants');
    }
}
