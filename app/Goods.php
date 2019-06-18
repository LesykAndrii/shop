<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table ='goods';

    public  function orders(){
        return $this->belongsToMany('App\Order','goods_orders')->withPivot('amount');
    }
}
