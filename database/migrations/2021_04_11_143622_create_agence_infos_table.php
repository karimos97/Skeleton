<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agence_infos', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('cin')->nullable();
            $table->string('agence')->nullable();
            $table->string('address')->nullable();
            $table->integer('ville');
            $table->string('zip_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('patant')->nullable();
            $table->string('IF')->nullable();
            $table->string('RC')->nullable();
            $table->string('ICE')->nullable();
            $table->string('CNSS')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('agence_infos');
    }
}
