<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billDetail extends Model
{
    //
    protected $table = "billDetail";

    public function product()
    {
        return $this->belongsTo('App/product','id_product','id');
    }

    public function bill()
    {
        return $this->belongsTo('App/bill','id_bill','id');
    }
}
