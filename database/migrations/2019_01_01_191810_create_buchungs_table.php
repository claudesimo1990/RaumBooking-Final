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
            $table->integer('qrcode');
            $table->integer('raum_id');
            $table->date('von');
            $table->date('bis');
            $table->string('kommentar')->nullable();
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
