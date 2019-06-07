<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanCleaningProgram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_cleaning_program', function (Blueprint $table) {
            $table->increments('id');
            $table->string('object');
            $table->string('material_made_from');
            $table->string('how_to_do');
            $table->string('routine');
            $table->string('program_to_do');
            $table->string('ket');
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
        Schema::dropIfExists('plan_cleaning_program');
    }
}
