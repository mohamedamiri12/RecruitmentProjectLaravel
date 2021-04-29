<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMissionPayementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mission_payments', function (Blueprint $table) {
            $table->bigInteger('mission_id')->unsigned()->after('id');
            $table->foreign('mission_id')->references('id')->on('missions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mission_payments', function (Blueprint $table) {
            $table->bigInteger('mission_id')->unsigned()->after('id');
            $table->foreign('mission_id')->references('id')->on('missions');
        });
    }
}
