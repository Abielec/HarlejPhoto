<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('ClinetId');
            $table->char('Name',60);
            $table->char('LastName',60);
            $table->char('Phone',9);
            $table->string('email')->unique();
            $table->timestamps();
        });
        Schema::table('session_informations',function (Blueprint $table)
        {
            $table->foreign('Client')->references('ClinetId')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
