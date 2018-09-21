<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang_Masuk extends Model
{
     public function supplier()
    {
    	return $this->belongsTo('App\Supplier', 'id_supplier');
    }

}
