<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCleaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleanings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('mask');
            $table->string('wound');
            $table->string('makeup');
            $table->string('jewelry');
            $table->string('ear');
            $table->string('shoe');
            $table->string('hair');
            $table->string('nail');
            $table->string('uniform');
            $table->string('employee_id');

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
        Schema::dropIfExists('cleanings');
    }
}
