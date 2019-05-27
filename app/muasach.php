<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muasach extends Model
{
   protected $table='sachmua';
   public function product()
    {
    	return $this->belongsTo('App\Product','product_id');
    }
}
