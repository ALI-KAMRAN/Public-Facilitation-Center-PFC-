<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientcontact extends Controller
{
    public function show()
      {
      	  return view('clientpage/client_Contact');
      }
}
