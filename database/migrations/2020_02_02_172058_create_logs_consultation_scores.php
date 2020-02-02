<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsConsultationScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_consultation_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('registry', 11);
            $table->string('description', 255);
            $table->string('bureau', 80);
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
        Schema::dropIfExists('logs_consultation_scores');
    }
}
