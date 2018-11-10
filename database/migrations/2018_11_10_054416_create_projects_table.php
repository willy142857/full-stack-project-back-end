<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fundraiser', 20);
            $table->string('email', 60);
            $table->string('name', 100);
            $table->unsignedInteger('category_id');
            $table->string('brief');
            $table->date('started_at')->default(null);
            $table->date('ended_at')->default(null);
            $table->unsignedBigInteger('curr_amount');
            $table->unsignedBigInteger('goal_amount');
            $table->unsignedInteger('backer');
            $table->text('description');
            $table->json('feedback')->default(null);
            $table->json('comment')->default(null);
            $table->string('img_path')->default('');
            $table->string('relative_web');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
