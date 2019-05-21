<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeralatanKondisi extends Model
{
    protected $table = 'peralatan_kondisi';
    protected $fillable = ['peralatan_id', 'item_pemeriksaan', 'kondisi_standard'];

    public function peralatan()
    {
      return $this->belongsTo(Peralatan::class);
    }
}
