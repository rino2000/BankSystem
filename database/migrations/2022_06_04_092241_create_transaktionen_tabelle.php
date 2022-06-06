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
        Schema::create('transaktionen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('konto_id'); //ist sender
            $table->float('amount');
            $table->string('empfaenger'); //als email
            $table->foreign('konto_id')
                ->references('id')
                ->on('bankkonto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaktionen');
    }
};
