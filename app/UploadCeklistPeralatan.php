<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadCeklistPeralatan extends Model
{
  protected $table = 'upload_ceklist_peralatan';
  protected $fillable = ['id'];

  public function CeklistPeralatan()
  {
    return $this->belongsTo(CeklistPeralatan::class);
  }
}
