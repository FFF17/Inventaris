<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi_Keluar extends Model
{
     public function barang()
    {
    	return $this->belongsTo('App\Barang_Masuk', 'id_barang', 'id');
    }
}
