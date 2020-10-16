<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->string('title', 32);
            $table->string('yearsReleased');
            $table->integer('topSpeed');
            $table->integer('price');
            $table->text('description');
            $table->unsignedBigInteger('car_id')->nullable();
            $table->timestamps();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_models', function (Blueprint $table) {
            $table->dropUnique(['car_id']);
            $table->dropForeign(['car_id']);
        });
    }
}
