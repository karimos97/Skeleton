<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('passport',30)->nullable();
            $table->date('pass_expire')->nullable();
            $table->string('cin',30)->nullable();
            $table->date('cin_expire')->nullable();
            $table->string('permis',30);
            $table->string('permis_location');
            $table->date('date_permis');
            $table->date('permis_expire')->nullable();
            $table->integer('client_id');
            $table->integer('user_id');
            $table->string('nationalite');
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
        Schema::dropIfExists('identities');
    }
}
