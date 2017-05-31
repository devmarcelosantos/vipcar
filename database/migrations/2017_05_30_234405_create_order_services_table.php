<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_services', function (Blueprint $table)
        {
            $table->increments('id')->nullable(false);
            $table->integer('service_id')->unsigned()->nullable(false);
            $table->integer('vehicle_id')->unsigned()->nullable(false);
            $table->integer('status')->unsigned()->nullable(false);
            $table->date('entry_date')->nullable(false);
            $table->date('leaving_date')->nullable(true);
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
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
        //
    }
}
