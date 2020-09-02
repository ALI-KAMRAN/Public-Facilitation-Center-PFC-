<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\law;

class clientprofile extends Controller
{
     public function show(){


            return view('/clientpage/client_Profile');



     }
}
