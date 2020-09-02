<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class productdetail extends Controller
{
  public function show($id)
  {
    $product=new product;
   $data=DB::select('select * from products where id=? ',[$id]);
   return view('productdetail')->withdetail($data);

  }
}
