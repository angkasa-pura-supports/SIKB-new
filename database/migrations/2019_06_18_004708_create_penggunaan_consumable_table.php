\<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaanConsumableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunaan_consumable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bandara_id')->unsigned();
            $table->foreign('bandara_id')->references('id')->on('bandara')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tanggal_input');
            $table->integer('consumable_id')->unsigned();
            $table->foreign('consumable_id')->references('id')->on('consumable')->onDelete('cascade')->onUpdate('cascade');
            $table->string('qty');
            $table->string('pengguna');
            $table->string('shift');
            $table->integer('petugas_id')->unsigned();
            $table->foreign('petugas_id')->references('id')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('ket');
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
        Schema::dropIfExists('penggunaan_consumable');
    }
}
