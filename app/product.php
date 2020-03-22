<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";

    public function product_type()
    {
        return $this->belongsTo('App/ProductType','id_type','id');
    }

    public function bill_detail()
    {
        return $this->hasMany('App/billDetail','id_product','id');
    }


}
