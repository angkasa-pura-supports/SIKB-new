<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CeklistSca extends Model
{
  protected $table = 'ceklist_sca';
  protected $fillable = ['bandara_id', 'area_id', 'pengawas_id', 'petugas', 'shift', 'tanggal_input'];

  public function bandara()
  {
    return $this->belongsTo(Bandara::class);
  }

  public function area()
  {
    return $this->belongsTo(AreaSca::class);
  }

  public function pengawas()
  {
    return $this->belongsTo(karyawan::class);
  }

  public function uploadCeklistSca()
  {
    return $this->hasMany(UploadCeklistSca::class);
  }
}
