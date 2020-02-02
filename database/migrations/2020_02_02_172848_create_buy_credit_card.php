<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyCreditCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_credit_card', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('purchasePrice');
            $table->string('registry', 11);
            $table->string('cardOperator', 80);
            $table->string('store', 80);
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
        Schema::dropIfExists('buy_credit_card');
    }
}
