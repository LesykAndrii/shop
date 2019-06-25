<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index(){
        $q = Input::get ( 'q' );
        $goods = Goods::where('name','LIKE','%'.$q.'%')->orWhere('article','LIKE','%'.$q.'%')->get();
        if(count($goods) > 0)
            return view('search')->withDetails($goods)->withQuery ( $q );
        else return view ('search')->withMessage('No Details found. Try to search again !');
    }
}
