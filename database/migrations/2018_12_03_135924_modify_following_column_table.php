<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyFollowingColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('following_project_user', function (Blueprint $table) {
            $table->string('country')->after('project_id');
            $table->string('name')->after('country');
            $table->string('address')->after('name');
            $table->string('note')->after('address')->default(null);
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
            $table->dropColumn('country');
            $table->dropColumn('name');
            $table->dropColumn('address');
            $table->dropColumn('note');
        });
    }
}
