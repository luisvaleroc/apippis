<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('equip1');
            $table->string('equip2');
            $table->string('equip3');
            $table->string('floor');
            $table->string('wall');
            $table->string('dump');
            $table->string('action');
            $table->unsignedBigInteger('store_id')->nullable()->index();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
          


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
        Schema::dropIfExists('plants');
    }
}
