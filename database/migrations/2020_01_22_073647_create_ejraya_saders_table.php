<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjrayaSadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejraya_saders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('areeza_id');
            $table->foreign('areeza_id')->references('id')->on('areezas');
            $table->integer('sader_number');
            $table->date('date');
            $table->date('end_date');
            $table->tinyInteger('accept_status')->nullable();
            $table->tinyInteger('response')->default("0");
            $table->unsignedBigInteger('ministry_id');
            $table->foreign('ministry_id')->references('id')->on('ministries');
            $table->string('reference_ministries_copy');
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
        Schema::dropIfExists('ejraya_saders');
    }
}
