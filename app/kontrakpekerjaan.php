<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontrakpekerjaan extends Model
{
    protected $table = 'KontrakPekerjaan';
    protected $fillable  = ['Bandara', 'no_kontrak', 'nama_pekerjaan', 'masa_berlaku', 'jenis_kontrak', 'pelaksana'];
}
