<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanCleaningProgram extends Model
{
  protected $table = 'plan_cleaning_program';
  protected $fillable = ['object', 'material_made_from', 'how_to_do', 'routine', 'program_to_do', 'ket'];
}
