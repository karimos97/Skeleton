<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('matricule',50);
            $table->integer('duree');
            $table->dateTime('date_sorti');
            $table->dateTime('date_retourn');
            $table->string('locationPlace');
            $table->string('current_km');
            $table->string('resturn_km')->nullable();
            $table->string('location_return');
            $table->float('day_cost');
            $table->float('total_cost');
            $table->float('avance');
            $table->float('rest')->nullable();
            $table->integer('client_id');
            $table->integer('client_2');
            $table->integer('user_id');
            $table->softDeletes();
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
        Schema::dropIfExists('contrats');
    }
}
