<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuydatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buydatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('data');
            $table->string('telephone');
            $table->string('key');
            $table->string('reference');
            $table->string('status')->default('No');
            $table->string('amount');
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
        Schema::dropIfExists('buydatas');
    }
}
