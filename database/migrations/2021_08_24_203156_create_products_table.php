<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->integer('qte');
            $table->double('pay');
            $table->BigInteger('modal_id')->unsigned()->index()->nullable();
            $table->foreign('modal_id')->references('id')->on('modalproducts')->onDelete('cascade');
            $table->timestamps();
            $table->string('image',150);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
