<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LiveCurrencyExchangeRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LiveCurrencyExchangeRates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('from_currency_id');
            $table->unsignedBigInteger('to_currency_id');
            $table->double('ratio');

            $table->foreign('from_currency_id')->references('id')->on('currency')->onDelete('cascade');
            $table->foreign('to_currency_id')->references('id')->on('currency')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LiveCurrencyExchangeRates');
    }
}
