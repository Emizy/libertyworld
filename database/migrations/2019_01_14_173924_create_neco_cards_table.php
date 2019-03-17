<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNecoCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neco_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_pin')->unique();
            $table->string('ref_id');
            $table->string('price');
            $table->string('Usage_status')->default('UNUSED');
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
        Schema::dropIfExists('neco_cards');
    }
}
