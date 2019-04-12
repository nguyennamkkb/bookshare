<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table='products';
    public function category()
    {
    	return $this->belongsTo('App\Category','id_category');
    }
    public function publishing()
    {
    	return $this->belongsTo('App\Publisher','id_publishing');
    }
    public function author()
    {
    	return $this->belongsTo('App\Author','id_author');
    }
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function status()
    {
        return $this->belongsTo('App\Status_pro','id_status');
    }
    
}
