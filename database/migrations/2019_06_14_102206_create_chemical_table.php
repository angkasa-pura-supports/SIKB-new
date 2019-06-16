<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemical', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_chemical');
            $table->longText('fungsi');
            $table->longText('cara_penggunaan');
            $table->longText('resiko');
            $table->longText('penggendalian_resiko');
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
        Schema::dropIfExists('chemical');
    }
}
