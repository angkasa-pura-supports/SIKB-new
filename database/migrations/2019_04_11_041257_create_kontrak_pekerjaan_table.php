<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontrakPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('KontrakPekerjaan', function (Blueprint $table) {
          $table->increments('id');
          $table->string('Bandara');
          $table->string('no_kontrak');
          $table->string('nama_pekerjaan');
          $table->string('masa_berlaku');
          $table->string('jenis_kontrak');
          $table->string('pelaksana');
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
          Schema::dropIfExists('KontrakPekerjaan');
    }
}
