<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeedbackIdInFollowingProjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('following_project_user', function (Blueprint $table) {
            $table->unsignedInteger('feedback_id')->after('user_id');
            $table->dropColumn('project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('following_project_user', function (Blueprint $table) {
            $table->unsignedInteger('project_id')->after('user_id');
            $table->dropColumn('feedback_id');
        });
    }
}
