<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadCeklistSlaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_ceklist_sla', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ceklist_sla_id')->unsigned();
            $table->foreign('ceklist_sla_id')->references('id')->on('ceklist_sla')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('lokasi')->nullable();
            $table->longText('kondisi')->nullable();
            $table->string('jadwal_penyiraman')->nullable();
            $table->string('jadwal_pemupukan')->nullable();
            $table->string('manpower')->nullable();
            $table->longText('desk_temuan')->nullable();
            $table->longText('desk_rtl')->nullable();
            $table->string('desk_pic')->nullable();
            $table->date('desk_target_penyelesaian')->nullable();
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
        Schema::dropIfExists('upload_ceklist_sla');
    }
}
