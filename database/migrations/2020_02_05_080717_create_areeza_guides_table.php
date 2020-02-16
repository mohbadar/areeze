<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreezaGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areeza_guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('des_date');
            $table->string('title');
            $table->text('description');

            $table->unsignedBigInteger('areeza_id');
            $table->foreign('areeza_id')->references('id')->on('areezas');
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
        Schema::dropIfExists('areeza_guides');
    }
}
