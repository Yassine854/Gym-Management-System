<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalmembers', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('sports_id')->unsigned()->index();
            $table->foreign('sports_id')->references('id')->on('sports')->onDelete('cascade');
            $table->BigInteger('coaches_id')->unsigned()->nullable()->default(NULL);
            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade');
            $table->BigInteger('members_id')->unsigned()->index();
            $table->foreign('members_id')->references('id')->on('members')->onDelete('cascade');
            $table->string('image',150);
            $table->integer('sub');
            $table->date('start');
            $table->date('end');
            $table->integer('pay');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('modalmembers');
    }
}
