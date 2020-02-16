<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('des_date');
            $table->text('description');
            $table->unsignedBigInteger('shekayatform_id');  // comments
            $table->foreign('shekayatform_id')->references('id')->on('shekayatforms');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('confirm');
    }
}
