<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table='bill_details';
    public function product()
    {
    	return $this->belongsTo('App\Product','product_id');
    }
}
