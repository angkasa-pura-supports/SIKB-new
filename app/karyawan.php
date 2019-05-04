<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
  protected $table = 'karyawan';
  protected $fillable = ['Nik', 'nama_karyawan', 'Jabatan', 'Unit_Kerja'];
  public function ceklistToilet()
  {
    return $this->hasMany(CeklistToilet::class);
  }
}
