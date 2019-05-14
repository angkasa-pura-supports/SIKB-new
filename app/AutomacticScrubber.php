<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomacticScrubber extends Model
{

  protected $table='ceklist_AutomacticScrubber';
  protected $fillable = ['bandara_id', 'pengawas_id','shift', 'tanggal_input', 'catatan'];

  public function bandara()
  {
    return $this->belongsTo(Bandara::class);
  }
    }
  public function pengawas()
  {
    return $this->belongsTo(karyawan::class);
  }
}
