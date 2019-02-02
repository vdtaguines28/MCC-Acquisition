<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('placetogo');
            $table->string('email');
            $table->string('thingtodo');
            $table->string('birthday');
            $table->string('gift');
            $table->string('mobile_number');
            $table->string('card');//other banks
            $table->string('card_name');
            $table->timestamps();
        });

        Schema::create('ajax_respondents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sessionkey');
            $table->string('title')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('placetogo')->nullable();
            $table->string('email')->nullable();
            $table->string('thingtodo')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gift')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('card')->nullable();//other banks
            $table->string('card_name')->nullable();
            $table->string('progress')->default('00000000000')->nullable();
            $table->boolean('complete')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respondents');
        Schema::dropIfExists('ajax_respondents');
    }
}
