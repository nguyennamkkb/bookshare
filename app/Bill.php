<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='bills';
    public function customers()
    {
    	return $this->belongsTo('App\Customer','customer_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
    public function statusod()
    {
    	return $this->belongsTo('App\Status_order','status_id');
    }

}
