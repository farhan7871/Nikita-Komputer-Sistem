<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPembelian extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'tanggal',  'id_toko', 'id_barang', 'jual',
        'banyak', 'harga', 'total'

    ];

    protected $hidden = [];

    public function toko()
    {
        return $this->belongsTo(KelolaToko::class, 'id_toko', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(KelolaBarang::class, 'id_barang', 'id');
    }
}
