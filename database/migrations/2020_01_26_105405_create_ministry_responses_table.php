<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinistryResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministry_responses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('ejraya_sader_id');
            $table->foreign('ejraya_sader_id')->references('id')->on('ejraya_saders');

            $table->date('date');
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
        Schema::dropIfExists('ministry_responses');
    }
}
