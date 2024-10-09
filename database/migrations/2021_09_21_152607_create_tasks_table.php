<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->BigInteger('sports_id')->unsigned()->index();
            $table->foreign('sports_id')->references('id')->on('sports')->onDelete('cascade');
            $table->BigInteger('coaches_id')->unsigned()->index();
            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade');
            $table->time('start');
            $table->time('end');
            $table->integer('day');
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
        Schema::dropIfExists('tasks');
    }
}
