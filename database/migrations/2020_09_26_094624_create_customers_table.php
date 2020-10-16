<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('surname');
            $table->BigInteger('phone');
            $table->string('email');
            $table->text('comment');
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
        Schema::dropIfExists('customers', function (Blueprint $table) {
            $table->dropUnique(['car_id']);
            $table->dropForeign(['car_id']);
        });
    }
}
