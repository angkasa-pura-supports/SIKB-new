<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaSca extends Model
{
  protected $table='areasca';
  protected $fillable = ['nama_area'];

  public function standard_area()
  {
    return $this->hasMany(StandardCleanlinessArea::class);
  }
}
