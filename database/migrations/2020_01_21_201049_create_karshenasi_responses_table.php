<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKarshenasiResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karshenasi_responses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('areeza_id');
            $table->foreign('areeza_id')->references('id')->on('areezas');

            // we choosed 0 for hefz and 1 for sader.
            $table->tinyInteger('status_type')->default(0);
            $table->date('date');
            $table->longText('description');
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
        Schema::dropIfExists('karshenasi_responses');
    }
}
