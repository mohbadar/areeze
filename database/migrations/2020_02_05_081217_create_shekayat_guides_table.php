<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShekayatGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shekayat_guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('des_date');
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('shekayatform_id');  // comments
            $table->foreign('shekayatform_id')->references('id')->on('shekayatforms');
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
        Schema::dropIfExists('shekayat_guides');
    }
}
