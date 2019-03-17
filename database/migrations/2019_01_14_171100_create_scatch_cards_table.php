<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScatchCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scatch_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('scratch_name');
            $table->string('card_pin')->unique();
            $table->string('ref_id');
            $table->string('price');
            $table->string('year');
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
        Schema::dropIfExists('scatch_cards');
    }
}
