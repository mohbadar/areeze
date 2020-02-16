<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjrayaHefzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejraya_hefzs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('areeza_id');
            $table->foreign('areeza_id')->references('id')->on('areezas');

            $table->date('date');
            $table->integer('hefz_number');
            $table->string('file');
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
        Schema::dropIfExists('ejraya_hefzs');
    }
}
