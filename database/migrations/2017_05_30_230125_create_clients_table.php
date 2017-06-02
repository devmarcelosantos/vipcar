<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table)
        {
            $table->increments('id')->nullable(false);
            $table->string('name', 50)->nullable(false);
            $table->string('cpf', 11)->nullable(false);
            $table->string('email', 80)->nullable(false);
            $table->string('address', 60)->nullable(false);
            $table->string('phone', 11)->nullable(false);
            $table->date('birth_date')->nullable(false);
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
