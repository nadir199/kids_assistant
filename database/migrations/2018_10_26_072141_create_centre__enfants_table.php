<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentreEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre__enfants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('enfant_id');
            $table->foreign('enfant_id')->references('id')->on('enfants');
            $table->unsignedInteger('centre_id');
            $table->foreign('centre_id')->references('id')->on('centres');
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
        Schema::dropIfExists('centre__enfants');
    }
}
