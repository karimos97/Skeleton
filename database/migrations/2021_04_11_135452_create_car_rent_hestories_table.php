<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarRentHestoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rent_hestories', function (Blueprint $table) {
            $table->id();
            $table->string('matricule',50);
            $table->date('date_rent');
            $table->date('date_retour');
            $table->integer('dure');
            $table->integer('client_id');
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
        Schema::dropIfExists('car_rent_hestories');
    }
}
