<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggunaanConsumable extends Model
{
    protected $table = 'penggunaan_consumable';
    protected $fillable = ['bandara_id', 'tanggal_input', 'consumable_id', 'qty', 'pengguna', 'shift', 'petugas_id', 'ket'];

    public function bandara()
    {
      return $this->belongsTo(Bandara::class);
    }

    public function consumable()
    {
      return $this->belongsTo(Consumable::class);
    }

    public function petugas()
    {
      return $this->belongsTo(karyawan::class);
    }
}
