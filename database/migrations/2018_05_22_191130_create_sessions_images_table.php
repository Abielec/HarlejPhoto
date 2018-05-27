<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_images', function (Blueprint $table) {
            $table->increments('ImageId');
            $table->integer('SessionId')->unsigned();
            $table->string('ImgURL');
            $table->timestamps();
        });
        Schema::table('session_informations', function(Blueprint $table)
        {
            $table->foreign('Thumb')->references('ImageId')->on('sessions_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions_images');
    }
}
