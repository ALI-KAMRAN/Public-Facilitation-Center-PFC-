<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\product;

class Pro extends Controller
{
    public function show()
    {     $product=new product;     
        $product=DB::select('select * from products');
        return view('product')->withproduct($product);
    
    }
}
