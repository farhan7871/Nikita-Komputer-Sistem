<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelolaBarang extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_barang', 'jenis_barang', 'harga'
    ];

    protected $hidden = [];
}
