<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    protected $fillable = [
        'nama_barang', 'harga', 'stok', 'keterangan', 'file'
    ];

    public function pesanan_detail() 
    {
        return $this->hasMany('App\PesananDetail','barang_id', 'id');
    }
}
