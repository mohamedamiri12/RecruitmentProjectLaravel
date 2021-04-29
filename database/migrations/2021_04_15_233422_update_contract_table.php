<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->bigInteger('candidate_id')->unsigned()->after('id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->bigInteger('client_id')->unsigned()->after('id');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->bigInteger('client_id')->unsigned()->after('id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->bigInteger('candidate_id')->unsigned()->after('id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
        });
    }
}
