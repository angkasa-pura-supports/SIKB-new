<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    protected $table = 'chemical';
    protected $fillable  = ['nama_chemical', 'fungsi', 'cara_penggunaan', 'resiko', 'penggendalian_resiko', 'ket'];
}
