<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CeklistSla extends Model
{
    protected $table = 'ceklist_sla';
    protected $fillable = ['bandara_id', 'pengawas_id', 'tanggal_input'];

    public function bandara()
    {
      return $this->belongsTo(Bandara::class);
    }

    public function pengawas()
    {
      return $this->belongsTo(karyawan::class);
    }
}
