<?php

namespace App\Http\Controllers;
use App\customerdetail;
use App\order;
use App\conformorder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Session;
class shipingonline extends Controller
{
      public function show(Request $req,$sum)
      {
        
      
          Session::put('total',$sum); 
         
        return view('shipingonlineaddress');
      }
    
}
