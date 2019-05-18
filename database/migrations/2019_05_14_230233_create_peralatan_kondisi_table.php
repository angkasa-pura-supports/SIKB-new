<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeralatanKondisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralatan_kondisi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('peralatan_id')->unsigned();
            $table->foreign('peralatan_id')->references('id')->on('peralatan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('item_pemeriksaan');
            $table->string('kondisi_standard');
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
        Schema::dropIfExists('peralatan_kondisi');
    }
}
