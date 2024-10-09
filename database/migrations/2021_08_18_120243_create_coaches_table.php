<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->integer('cin')->unique();
            $table->string('fname',20);
            $table->string('lname',20);
            $table->string('gender',8);
            $table->date('scontract');
            $table->date('econtract');
            $table->BigInteger('sports_id')->unsigned()->index();
            $table->foreign('sports_id')->references('id')->on('sports')->onDelete('cascade');
            $table->double('height')->nullable();
            $table->double('weight')->nullable();
            $table->string('address',50);
            $table->date('birth');
            $table->integer('tel');
            $table->string('email',30)->unique();
            $table->string('password');
            $table->string('job',10)->nullable();
            $table->string('image',150);

            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('coaches');
    }


}
