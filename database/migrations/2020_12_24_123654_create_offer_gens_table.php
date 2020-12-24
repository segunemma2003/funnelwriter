<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_gens', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('desc');
            $table->string('benefit');
            $table->string('offer_title')->nullable();
            $table->integer('offer_price')->nullable();
            $table->string('bonus_title')->nullable();
            $table->integer('bonus_price')->nullable();


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
        Schema::dropIfExists('offer_gens');
    }
}
