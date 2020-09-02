<?php

namespace App\Http\Controllers;
use App\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class saveorder extends Controller
{
    public function show(Request $req)
    {
        $this->validate($req,['qty'=>'required|numeric'],[
  
            'qty.required'=> 'quantity cant be empty',
            'qty.numeric' => ' quantity can only be number',
          
          ]);

        $order= new order;
        $order->name=$req->name;
        $order->price=$req->price;
        $order->title=$req->title;
        $order->qty=$req->qty;
        $order->image=$req->image;
        $order->save();
        return redirect('/product/cart');

    }
}
