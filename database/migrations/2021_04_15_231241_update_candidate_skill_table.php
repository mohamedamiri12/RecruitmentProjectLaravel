<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCandidateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidate_skills', function (Blueprint $table) {
            $table->bigInteger('candidate_id')->unsigned()->after('id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->bigInteger('skill_id')->unsigned()->after('id');
            $table->foreign('skill_id')->references('id')->on('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate_skills', function (Blueprint $table) {
            $table->dropForeign(['candidate_id']);
            $table->dropColumn('candidate_id');
            $table->dropForeign(['skill_id']);
            $table->dropColumn('skill_id');
        });
    }
}
