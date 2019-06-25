<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{

    public function AddGoods(){
        $q = Input::get ();
        $or = Orders::where('token',$q['_token'])->get();

        if(count($or)==0)
        {
          DB::insert('insert into orders (customer_name,city,phone,comment,created_at,updated_at,token) values ("","",123456,"","'.date('Y-m-d H:i:s').'","'.date('Y-m-d H:i:s').'","'.$q['_token'].'")');
        }

        DB::insert('insert into goods_orders (goods_id,order_id,amount) values ('.$q['goods_id'].',4,'.$q['quantity'].')');


        $goods = DB::select('select * from goods g, goods_orders go where g.id= go.goods_id and go.order_id = ?', [$or->id_order]);
        if(count($goods) > 0)
           return view('search')->withDetails($goods)->withQuery ( $q );
        else return view ('search')->withMessage('No Details found. Try to search again !');
    }

    public function buyActions()
    {
        var_dump(Input::get('good_id'));
    }

    public function successAction(Request $request){
        $allData = Input::all();
        Orders::create($request->all());
        $order = new Orders();
        $order->customer_name=$allData->customer_name;

        $order->save();


        return $request->all();
    }
}
