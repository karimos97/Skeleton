<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarChargersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_chargers', function (Blueprint $table) {
            $table->id();
            $table->string('matricul');
            $table->float('cost');
            $table->date('date_charg')->nullable();
            $table->string('title');
            $table->string('path');
            $table->integer('user_id');
            $table->string('current_km');
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
        Schema::dropIfExists('car_chargers');
    }
}
