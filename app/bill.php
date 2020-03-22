<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    //
    protected $table = "bill";

    public function bill_detail()
    {
        return $this->hasMany('App/billDetail','id_bill','id');
    }

    public function product()
    {
        return $this->belongsTo('App/Customer','id_customer','id');
    }
}
