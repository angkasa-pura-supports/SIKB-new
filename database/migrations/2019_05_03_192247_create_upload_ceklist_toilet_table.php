<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadCeklistToiletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_ceklist_toilet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ceklist_toilet_id')->unsigned();
            $table->foreign('ceklist_toilet_id')->references('id')->on('ceklist_toilet')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_ceklist');
            $table->string('berkas_ceklist');
            $table->string('status_pria')->nullable();
            $table->string('status_wanita')->nullable();
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
        Schema::dropIfExists('upload_ceklist_toilet');
    }
}
