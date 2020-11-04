<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('stores_id');
            $table->unsignedBigInteger('services_id');
            $table->timestamps();

            $table ->foreign('stores_id')
            ->references('id')
            ->on('stores')
            ->onDelete('cascade');

            $table ->foreign('services_id')
            ->references('id')
            ->on('store_services')
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
        Schema::dropIfExists('store_services');
    }
}
