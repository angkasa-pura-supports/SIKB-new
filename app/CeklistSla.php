<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CeklistSla extends Model
{
    protected $table = 'ceklist_sla';
    protected $fillable = ['bandara_id', 'tanggal_input'];

    public function bandara()
    {
      return $this->belongsTo(Bandara::class);
    }

    public function pengawas()
    {
      return $this->belongsTo(karyawan::class);
    }

    public function uploadCeklistSla()
    {
      return $this->hasMany(UploadCeklistSla::class);
    }
}
