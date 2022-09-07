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
        Schema::table('led', function (Blueprint $table) {
            $table->smallInteger('bookingduration')->nullable()->after('multimediaquantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('led', function (Blueprint $table) {
            $table->dropColumn('bookingduration');
        });
    }
};
