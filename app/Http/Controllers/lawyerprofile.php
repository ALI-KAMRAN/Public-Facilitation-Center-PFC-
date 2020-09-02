<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\law;

class lawyerprofile extends Controller
{
     public function show(){


            return view('\lawyerpage\lawyerProfile');



     }
}
