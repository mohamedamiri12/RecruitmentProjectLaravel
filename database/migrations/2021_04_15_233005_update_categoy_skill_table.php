<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoySkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_skills', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned()->after('id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::table('category_skills', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
            $table->dropForeign(['skill_id']);
            $table->dropColumn('skill_id');
        });
    }
}
