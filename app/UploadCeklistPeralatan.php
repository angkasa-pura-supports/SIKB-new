<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadCeklistPeralatan extends Model
{
  protected $table = 'upload_ceklist_peralatan';
  protected $fillable = ['ceklist_peralatan_id', 'peralatan_kondisi_id', 'kondisi'];

  public function ceklistPeralatan()
  {
    return $this->belongsTo(CeklistPeralatan::class);
  }

  public function peralatanKondisi()
  {
    return $this->belongsTo(PeralatanKondisi::class);
  }
}
