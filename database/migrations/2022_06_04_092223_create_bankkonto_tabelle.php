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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('bank')->default('Postbank');
            $table->string('iban');
            $table->date('gueltigkeit');
            $table->string('bic');
            $table->unsignedInteger('kontonummer');
            $table->unsignedInteger('kartennummer');
            $table->float('guthaben')->default(0.00);
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
