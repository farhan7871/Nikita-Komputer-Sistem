<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPenjualan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'tanggal', 'nama_pembeli', 'id_barang',
        'banyak', 'id_harga', 'total', 'modal', 'untung'
    ];

    protected $hidden = [];


    public function barang()
    {
        return $this->belongsTo(KelolaBarang::class, 'id_barang', 'id');
    }
}
