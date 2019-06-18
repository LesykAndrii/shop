<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoryAction($url){
        $category = Categories::where('url',$url)->first();
        if($category){
            $goods = $category->goods;
            return view('goods',['goods'=>$goods]);
        }
    }
}
