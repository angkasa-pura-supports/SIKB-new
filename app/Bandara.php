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
}
