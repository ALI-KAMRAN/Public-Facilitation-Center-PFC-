<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class lawyercontact extends Controller
{
    public function show()
      {
      	  return view('lawyerpage/lawyer_Contact');
      }
}
