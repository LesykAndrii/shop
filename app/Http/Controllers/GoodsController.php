<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function showAction($url){
        $product=Goods::where('url',$url)->first();
        if($product){
            return view('product',['good'=>$product]);
        }
    }
}
