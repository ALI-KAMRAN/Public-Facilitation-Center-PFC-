<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class lawyerabout extends Controller
{
    
     public function show()
      {
      	  return view('lawyerpage/lawyer_about');
      }
}
