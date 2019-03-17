<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passport');
            $table->string('fullname');
            $table->string('address');
            $table->string('telephone');
            $table->string('email');
            $table->string('gender');
            $table->string('age');
            $table->string('program');
            $table->string('payment');
            $table->string('amount');
            $table->string('access_code');
            $table->string('origin');
            $table->string('lga');
            $table->string('town');
            $table->string('pfullname');
            $table->string('paddress');
            $table->string('ptelephone');
            $table->string('relationship');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stud_forms');
    }
}
