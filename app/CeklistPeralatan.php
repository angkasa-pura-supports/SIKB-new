<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CeklistPeralatan extends Model
{
    protected $table = 'ceklist_peralatan';
    protected $fillable = ['bandara_id', 'peralatan_id', 'pengawas_id', 'petugas', 'shift', 'tanggal_input', 'catatan', 'berkas'];

    public function bandara()
    {
      return $this->belongsTo(Bandara::class);
    }

    public function peralatan()
    {
      return $this->belongsTo(Peralatan::class);
    }

    public function pengawas()
    {
      return $this->belongsTo(karyawan::class);
    }
}
