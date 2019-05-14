<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCeklistAutomacticScrubberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceklist_AutomacticScrubber', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bandara_id')->unsigned();
            $table->foreign('bandara_id')->references('id')->on('bandara')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('pengawas_id')->unsigned();
            $table->foreign('pengawas_id')->references('id')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('shift');
            $table->date('tanggal_input');
            $table->longText('catatan')->nullable();
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
        Schema::dropIfExists('ceklist_AutomacticScrubber');
    }
}
