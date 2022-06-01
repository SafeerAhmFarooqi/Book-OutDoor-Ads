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
        Schema::create('sub_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('led_id');
            $table->unsignedBigInteger('order_id');
            $table->string('price')->nullable();
            $table->string('no_of_days')->nullable();
            $table->string('tax')->nullable();
            $table->timestamp('startDate')->nullable();
            $table->timestamp('endDate')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('total_price')->nullable();
            $table->string('total_tax')->nullable();
            $table->boolean('payment_status')->default(0);
            $table->boolean('complete_status')->nullable();
            $table->boolean('cancel_status')->nullable();
            $table->string('cancel_detail')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('sub_orders');
    }
};
