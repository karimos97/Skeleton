<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papiers', function (Blueprint $table) {
            $table->id();
            $table->string('matricul');
            $table->string('title');
            $table->date('renew_date');
            $table->date('expire_date');
            $table->string('serie')->nullable();
            $table->float('cost');
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
        Schema::dropIfExists('papiers');
    }
}
