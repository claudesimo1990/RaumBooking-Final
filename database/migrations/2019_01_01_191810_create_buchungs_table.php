<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuchungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buchungs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gebaude_id');
            $table->integer('user_id');
            $table->integer('raum_id');
            $table->integer('qrcode')->nullable();
            $table->integer('raum_number');
            $table->time('von')->nullable();
            $table->time('bis')->nullable();
            $table->string('event')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('buchungs');
    }
}
