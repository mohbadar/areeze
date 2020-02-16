<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShekayatFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shekayatforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('last_name');
            $table->string('job_title');
            $table->string('related_office');
            $table->string('current_address');
            $table->string('email');
            $table->string('maaroz_name');
            $table->integer('age');
            $table->integer('national_identity_card_NO');
            $table->integer('phone_number');
            $table->string('old_reply');

            $table->unsignedBigInteger('priority_id');
            $table->foreign('priority_id')->references('id')->on('priorities');

            $table->unsignedBigInteger('ministry_id');
            $table->foreign('ministry_id')->references('id')->on('ministries');

            $table->unsignedBigInteger('related_id');
            $table->foreign('related_id')->references('id')->on('related');

            $table->unsignedBigInteger('educational_level_id');
            // $table->foreign('educational_level_id')->references('id')->on('educational_levels');

            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');

            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('provinces');

            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');

            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');

            $table->unsignedBigInteger('chairmanship_id');
            $table->foreign('chairmanship_id')->references('id')->on('chairmanships');

           /* $table->unsignedBigInteger('contact_type_id')->nullable();
            $table->foreign('contact_type_id')->references('id')->on('contact_types');*/

            $table->string('identity_photo')->nullable();
            $table->string('complain_photo')->nullable();
            $table->string('complainer_photo')->nullable();
            $table->longText('description');
            $table->date('date');
            $table->tinyInteger('gender')->default(1);
            $table->tinyInteger('downloaded')->default(0);
            $table->string('form_random_number')->nullable();
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
        Schema::dropIfExists('shekayatforms');
    }
}
