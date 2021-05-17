<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('sex',5);
            $table->string('company',50)->nullable();
            $table->date('date_birth');
            $table->string('phone1',20);
            $table->string('phone2',20)->nullable();
            $table->string('email',50)->nullable();
            $table->text('observation')->nullable();
            $table->integer('listed')->default(0);
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
        Schema::dropIfExists('clients');
    }
}
