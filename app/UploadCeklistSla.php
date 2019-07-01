<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadCeklistSla extends Model
{
  protected $table = 'upload_ceklist_sla';
  protected $fillable = ['ceklist_sla_id', 'lokasi', 'kondisi', 'jadwal_penyiraman', 'jadwal_pemupukan', 'manpower', 'desk_temuan', 'desk_rtl', 'desk_pic', 'desk_target_penyelesaian'];

  public function ceklistSla(){
    return $this->belongsTo(CeklistSla::class);
  }
}
