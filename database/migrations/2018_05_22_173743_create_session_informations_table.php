<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_informations', function (Blueprint $table) {
            $table->increments('SessionId');
            $table->date('SessionDate');
            $table->char('SessionTitle',90);
            $table->integer('Thumb')->unsigned();
            $table->integer('Client')->unsigned();
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
        Schema::dropIfExists('session_informations');
    }
}
