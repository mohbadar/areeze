<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowedTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followed_types', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('ejraya_sader_id');
            $table->foreign('ejraya_sader_id')->references('id')->on('ejraya_saders');

            $table->tinyInteger('followed_type');
            $table->date('date');
            $table->longText('description');
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
        Schema::dropIfExists('followed_types');
    }
}
