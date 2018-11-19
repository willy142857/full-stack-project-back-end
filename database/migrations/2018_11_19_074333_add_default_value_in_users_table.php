<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultValueInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->after('password')->nullable()->default(null)->change();
            $table->text('description')->after('phone')->nullable()->default(null)->change();
            $table->string('sex')->after('description')->nullable()->default(null)->change();
            $table->string('address')->after('sex')->nullable()->default(null)->change();
            $table->date('birth')->after('address')->nullable()->default(null)->change();
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
            $table->string('phone')->after('password')->change();
            $table->text('description')->after('phone')->change();
            $table->string('sex')->after('description')->change();
            $table->string('address')->after('sex')->change();
            $table->date('birth')->after('address')->change();
        });
    }
}
