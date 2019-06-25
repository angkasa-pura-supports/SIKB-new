<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
  protected $table = 'karyawan';
  protected $fillable = ['Nik', 'nama_karyawan', 'jk', 'Jabatan', 'Unit_Kerja'];
  public function ceklistToilet()
  {
    return $this->hasMany(CeklistToilet::class);
  }

  public function ceklistPeralatan()
  {
    return $this->hasMany(CeklistPeralatant::class);
  }

  public function ceklistSca()
  {
    return $this->hasMany(CeklistSca::class);
  }

  public function ceklistSla()
  {
    return $this->hasMany(CeklistSla::class);
  }
}
