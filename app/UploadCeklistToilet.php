<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadCeklistToilet extends Model
{
    protected $table = 'upload_ceklist_toilet';
    protected $fillable = ['ceklist_toilet_id', 'nama_ceklist', 'berkas_ceklist', 'status_pria', 'status_wanita'];

    public function ceklistToilet()
    {
      return $this->belongsTo(CeklistToilet::class);
    }
}
