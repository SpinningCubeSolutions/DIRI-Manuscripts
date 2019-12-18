<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('physical_location');
            $table->string('classmark');
            $table->string('place_of_origin');
            $table->date('date_of_creation');
            $table->string('associated_persons');
            $table->text('physical_description');
            $table->string('material');
            $table->string('format');
            $table->string('binding');
            $table->text('images');
            $table->unsignedBigInteger('user_id')->index('user_id')->comment('The user who created the manuscript.');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manuscripts');
    }
}
