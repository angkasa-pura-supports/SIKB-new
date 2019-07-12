<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    protected $table = 'consumable';
    protected $fillable =['nama_consumable', 'jenis', 'stok', 'sisa_stok'];

    public function penggunaanConsumable()
    {
      return $this->hasMany(PenggunaanConsumable::class);
    }
}
