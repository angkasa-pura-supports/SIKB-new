<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadCeklistPeralatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_ceklist_peralatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ceklist_peralatan_id')->unsigned();
            $table->foreign('ceklist_peralatan_id')->references('id')->on('ceklist_peralatan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('peralatan_kondisi_id')->unsigned();
            $table->foreign('peralatan_kondisi_id')->references('id')->on('peralatan_kondisi')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kondisi')->nullable();
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
        Schema::dropIfExists('upload_ceklist_peralatan');
    }
}
