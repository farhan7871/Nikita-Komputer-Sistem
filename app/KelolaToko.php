<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelolaToko extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_toko', 'alamat_toko'
    ];

    protected $hidden = [];
}
