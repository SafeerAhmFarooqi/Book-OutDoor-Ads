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
        Schema::table('users', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('led', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('led_images', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('city', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('booking_dates', function (Blueprint $table) {
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table('taxes', function (Blueprint $table) {
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('led', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('led_images', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('city', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('booking_dates', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('taxes', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
};
