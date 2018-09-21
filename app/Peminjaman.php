<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
     public function barang()
    {
    	return $this->belongsTo('App\Barang_Masuk', 'id_barang', 'id');
    }
}
