<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('stores_id');
            $table->unsignedBigInteger('times_id');
            $table->timestamps();

            $table ->foreign('stores_id')
            ->references('id')
            ->on('stores')
            ->onDelete('cascade');

            $table ->foreign('times_id')
            ->references('id')
            ->on('times')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_times');
    }
}
