<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table)
        {
            $table->increments('id')->nullable(false);
            $table->string('brand', 20)->nullable(false);
            $table->string('model', 30)->nullable(false);
            $table->integer('year')->unsigned()->nullable(false);
            $table->integer('client_id')->unsigned()->nullable(false);
            $table->foreign('client_id')->references('id')->on('clients');
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
