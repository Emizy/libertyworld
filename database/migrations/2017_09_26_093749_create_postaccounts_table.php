<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postaccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg');
            $table->string('typing');
            $table->string('photocopy');
            $table->string('passport');
            $table->string('graphic');
            $table->string('others');
            $table->string('expenses');
            $table->string('income');
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postaccounts');
    }
}
