<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LokasiToilet extends Model
{
  protected $table = 'lokasi_toilet';
  protected $fillable = ['lokasi_toilet', 'nama_toilet'];
  public function ceklistToilet()
  {
    return $this->hasMany(CeklistToilet::class);
  }
}
