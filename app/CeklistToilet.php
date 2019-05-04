<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CeklistToilet extends Model
{
    protected $table='ceklist_toilet';
    protected $fillable = ['bandara_id', 'lokasi_toilet_id', 'pengawas_id', 'petugas', 'shift', 'tanggal_input', 'catatan'];

    public function bandara()
    {
      return $this->belongsTo(Bandara::class);
    }
    public function lokasiToilet()
    {
      return $this->belongsTo(LokasiToilet::class);
    }
    public function pengawas()
    {
      return $this->belongsTo(karyawan::class);
    }

    public function uploadCeklistToilet()
    {
      return $this->hasMany(UploadCeklistToilet::class);
    }
}
