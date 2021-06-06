<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_infos', function (Blueprint $table) {
            $table->id();
            $table->string('matricul',50);
            $table->string('body_number',50);
            $table->string('color',50);
            $table->date('date_buy');
            $table->string('maisson_achat',50)->nullable();
            $table->string('rate_credit',50)->nullable();
            $table->float('car_price',12,4)->nullable();
            $table->date('credit_date')->nullable();
            $table->date('date_vente')->nullable();
            $table->float('prix_vente')->nullable();
            $table->string('transmission',20);
            $table->string('carrburant',20);
            $table->integer('puissance');
            $table->integer('band_id');
            $table->integer('model_id');
            $table->string('category');
            $table->integer('user_id');
            $table->text('observation')->nullable();
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
        Schema::dropIfExists('car_infos');
    }
}
