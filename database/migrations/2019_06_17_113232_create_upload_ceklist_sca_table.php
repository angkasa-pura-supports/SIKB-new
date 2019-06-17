<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadCeklistScaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_ceklist_sca', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ceklist_sca_id')->unsigned();
            $table->foreign('ceklist_sca_id')->references('id')->on('ceklist_sca')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('sca_id')->unsigned();
            $table->foreign('sca_id')->references('id')->on('StandardCleanlinessArea')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('kode')->nullable();
            $table->longText('penjelasan')->nullable();
            $table->longText('tindak_lanjut')->nullable();
            $table->longText('oleh')->nullable();
            $table->longText('waktu')->nullable();
            $table->longText('hasil')->nullable();
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
        Schema::dropIfExists('upload_ceklist_sca');
    }
}
