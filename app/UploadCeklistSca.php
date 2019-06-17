<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadCeklistSca extends Model
{
  protected $table = 'upload_ceklist_sca';
  protected $fillable = ['ceklist_sca_id', 'sca_id', 'kode', 'penjelasan', 'tindak_lanjut', 'oleh', 'waktu', 'hasil'];

  public function ceklistSca()
  {
    return $this->belongsTo(CeklistSca::class);
  }

  public function sca()
  {
    return $this->belongsTo(StandardCleanlinessArea::class);
  }
}
