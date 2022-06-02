<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankkonto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank');
            $table->string('iban');
            $table->date('gültigkeit');
            $table->string('bic');
            $table->bigInteger('kontonummer');
            $table->string('kartennummer');
            $table->double("guthaben");
            $table->unsignedInteger('user_id')->nullable();
//Fremdschlüssel user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankkonto');
    }
};
