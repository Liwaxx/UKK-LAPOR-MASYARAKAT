<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfirmasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_admin')->unsigned();
            $table->bigInteger('id_petugas')->unsigned();
            $table->bigInteger('id_laporan')->unsigned();
            $table->bigInteger('status')->unsigned();
            $table->string('image');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_user')->on('user');
            $table->foreign('id_petugas')->references('id_user')->on('user');
            $table->foreign('id_laporan')->references('id_laporan')->on('laporan');
            $table->foreign('status')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasis');
    }
}
