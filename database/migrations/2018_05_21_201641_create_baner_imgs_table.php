<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanerImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baner_imgs', function (Blueprint $table) {
            $table->increments('BanerImgId');
            $table->string('BackgroundURL');
            $table->integer('Position')->unsigned();
            $table->char('MainSlogan',60)->nullable();
            $table->char('SecondSlogan',60)->nullable();
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
        Schema::dropIfExists('baner_imgs');
    }
}
