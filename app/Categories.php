<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table ='categories';
    public function category() {
        return $this->belongsTo('App\Categories'); // don't forget to add your full namespace
    }
    public function goods()
    {
        return $this->hasMany('App\Goods');
    }
}
