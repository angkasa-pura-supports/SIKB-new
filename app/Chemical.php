<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    protected $table = 'chemical';
    protected $filllable = ['nama_chemical'];
}
