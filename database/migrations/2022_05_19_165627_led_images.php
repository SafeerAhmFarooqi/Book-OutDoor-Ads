<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('led_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('led_id');
            $table->string('name')->nullable();
            $table->string('path');
            $table->timestamps();


            $table->foreign('led_id')->references('id')->on('led')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('led_images');
    }
};
