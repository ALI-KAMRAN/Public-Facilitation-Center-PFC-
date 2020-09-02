<?php

namespace App\Http\Controllers;
use App\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class deleteorder extends Controller
{
    public function show($id)
    {
        $order=new order;
        $data=DB::table('orders')->where('id',$id);
          $data->delete();
          return redirect()->back();
    }
}
