<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    protected $table = 'peralatan';
    protected $fillable = ['nama_peralatan', 'nama_mesin', 'type', 'no_mesin'];

    public function ceklistPeralatan()
    {
      return $this->hasMany(CeklistPeralatant::class);
    }

    public function peralatanKondisi()
    {
      return $this->hasMany(PeralatanKondisi::class);
    }
}
