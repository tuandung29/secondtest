<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "cusomer";

    public function bill()
    {
        return $this->hasMany('App/bill','id_customer','id');
    }
}
