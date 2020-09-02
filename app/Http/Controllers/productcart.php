<?php

namespace App\Http\Controllers;
use App\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class productcart extends Controller
{
    public function show()
   {
    $data=DB::select('select * from orders');
    return view('cart')->withorder($data);
   }
}
