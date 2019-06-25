<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bandara extends Model
{
    protected $table = 'bandara';
    protected $fillable = ['threeletter', 'nama_bandara'];

    public function ceklistToilet()
    {
      return $this->hasMany(CeklistToilet::class);
    }
    public function ceklistPeralatan()
    {
      return $this->hasMany(CeklistPeralatant::class);
    }
    public function ceklistSca()
    {
      return $this->hasMany(CeklistSca::class);
    }
    public function ceklistSla()
    {
      return $this->hasMany(CeklistSla::class);
    }
}
