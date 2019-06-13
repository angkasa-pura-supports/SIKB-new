<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandardCleanlinessArea extends Model
{
  protected $table = 'StandardCleanlinessArea';
  protected $fillable = ['area_id', 'material', 'standard_area'];

  public function area()
  {
    return $this->belongsTo(AreaSca::class);
  }

}
