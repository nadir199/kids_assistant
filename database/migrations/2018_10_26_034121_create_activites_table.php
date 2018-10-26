<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('description');
            $table->string('categorie');
            $table->timestamp('dateDebut');
            $table->timestamp('dateFin');
            $table->unsignedInteger('enfant_id');
            $table->foreign('enfant_id')->references('id')->on('enfants');
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
        Schema::dropIfExists('activites');
    }
}
