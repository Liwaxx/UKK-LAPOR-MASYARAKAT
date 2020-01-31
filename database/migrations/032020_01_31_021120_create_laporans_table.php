<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->bigIncrements('id_laporan');
            $table->text('isi_laporan');
            $table->bigInteger('id_user')->unsigned();
            $table->text('lokasi');
            $table->string('gambar');
            $table->bigInteger('id_kategori')->unsigned();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
