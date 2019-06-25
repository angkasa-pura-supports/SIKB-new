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
            $table->string('tanggal_input');
            $table->string('nama_consumable');
            $table->string('pengguna');
            $table->string('shift');
            $table->string('qty');
            $table->string('petugas');
            $table->string('team_leader');
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
