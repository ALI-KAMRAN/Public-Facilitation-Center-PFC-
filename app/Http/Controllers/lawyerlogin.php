<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class lawyerlogin extends Controller
{
     public function show()
      {
      	  return view('lawyer_Login');
      }
}
